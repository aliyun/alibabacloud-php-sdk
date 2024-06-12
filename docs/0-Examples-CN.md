[← 首页](../../README.md) | 快速使用[(English)](0-Examples-EN.md)

***

## 要求

- 要使用 Alibaba Cloud SDK for PHP，您需要一个云账号以及一对 `Access Key ID` 和 `Access Key Secret`。 请在阿里云控制台中的[AccessKey管理页面](https://usercenter.console.aliyun.com/#/manage/ak)上创建和查看您的Access Key，或者联系您的系统管理员。
- 要使用 Alibaba Cloud SDK for PHP 访问某个产品的API，您需要事先在[阿里云控制台](https://home.console.aliyun.com/)中开通这个产品。
- Alibaba Cloud SDK for PHP 需要 PHP >= 5.6 以上的版本。

## 通过 Composer 来管理项目依赖(推荐)

```bash
# require alibabacloud/imagesearch-20201214 for example
composer require alibabacloud/imagesearch-20201214
```

# 快速使用

以下这个代码示例向您展示了调用 Alibaba Cloud SDK for PHP 的3个主要步骤：

1. 创建`Config`实例并初始化。

2. 创建`Client`实例并初始化。

3. 创建`RuntimeOptions`实例并设置运行参数。

4. 创建 API 请求并设置参数。

5. 发起请求并处理应答或异常。

```php
<?php
namespace demo;

require_once __DIR__ . \DIRECTORY_SEPARATOR . '..' . \DIRECTORY_SEPARATOR . 'vendor' . \DIRECTORY_SEPARATOR . 'autoload.php';

use AlibabaCloud\SDK\ImageSearch\V20201214\ImageSearch;
use Darabonba\OpenApi\Models\Config;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByNameRequest;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;

$config = new Config();
// 必填，请确保代码运行环境设置了环境变量 ALIBABA_CLOUD_ACCESS_KEY_ID。
$config->accessKeyId = getenv("ALIBABA_CLOUD_ACCESS_KEY_ID");
// 必填，请确保代码运行环境设置了环境变量 ALIBABA_CLOUD_ACCESS_KEY_SECRET。
$config->accessKeySecret = getenv("ALIBABA_CLOUD_ACCESS_KEY_SECRET");
$config->regionId = "cn-shanghai";
$config->endpoint = "imagesearch.cn-shanghai.aliyuncs.com";
$client = new ImageSearch($config);
$request = new SearchImageByNameRequest();
$request->instanceName = "phimagesearch";
$request->picName = 'test';
$request->productId = "TEST";

$runtime = new RuntimeOptions();
$runtime->maxIdleConns = 3;
$runtime->connectTimeout = 10000;
$runtime->readTimeout = 10000;
$headers = [];
try {
    $response = $client->searchImageByNameWithOptions($request, $runtime);
    var_dump($response);
} catch (TeaUnableRetryError $e) {
    var_dump($e->getMessage());
    // var_dump($e->getErrorInfo());
    // var_dump($e->getLastException());
    // var_dump($e->getLastRequest());
}
```

***
[← 首页](../../README.md) | 快速使用[(English)](0-Examples-EN.md)
