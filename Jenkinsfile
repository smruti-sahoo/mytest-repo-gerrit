pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Build Stage'
      }
    }
    stage('Test') {
      steps {
        sh '''echo "Current Date"
date'''
      }
    }
    stage('Test1') {
      steps {
        build 'mytest'
      }
    }
  }
}