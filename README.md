よく使うJenkinsのPipelineから呼び出すスクリプト群
-----------------------------------------------------------------------------

Jenkinsfileの中で

```
git branch: 'tools', url: 'https://github.com/karinharp/jenkins-tools.git'
```

として、あとは好きに呼ぶ。

## スクリプト説明

整理できたものから順次追加予定

### PostMsg2Discord.php

Discordのメッセージを投げるスクリプト

- 第一引数：チャンネルから設定した WebHook URL
- 第二引数：メッセージ

```
php PostMsg2Discord.php dcWebHookUrl dcMessage
```

