package com.example.androidstudioconnectdatabase;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    EditText editTextUserName;
    EditText editTextPassword;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        editTextUserName = findViewById(R.id.editTextUsername);
        editTextPassword = findViewById(R.id.editTextPassword);
    }

    // on click function implemented in xml code
    public void OnLogin(View view){
        String username = editTextUserName.getText().toString().trim();
        String password = editTextPassword.getText().toString().trim();
        String type = "login";

        BackgroundWorker backgroundWorker = new BackgroundWorker(this);
        backgroundWorker.execute(type, username, password);
    }
}
