[← Home](../../README.md) | Examples[(中文)](0-Examples-CN.md)

***

## Requirements

- To use Alibaba Cloud SDK for PHP, you must have an Alibaba Cloud account as well as an `AccessKey ID` and an `AccessKey Secret`. Create and view your AccessKey on the [RAM console](https://ram.console.aliyun.com "RAM console") or contact your system administrator.
- To use the Alibaba Cloud SDK for PHP to access the APIs of a product, you must first activate the product on the [Alibaba Cloud console](https://home.console.aliyun.com) if required.
- The Alibaba Cloud PHP SDK requires PHP 5.6 or later.

## Installation

If you use `Composer` to manage PHP libraries

```bash
# require alibabacloud/imagesearch-20201214 for example
composer require alibabacloud/imagesearch-20201214
```

## Quick Examples

The following code example shows the three main steps to use Alibaba Cloud SDK for PHP :

1. Create and initialize a `Config` instance.

2. Create and initialize a `Client` instance.

3. Create and set up parameters `RuntimeOptions` instance.

4. Create an API request and set parameters.

5. Initiate the request and handle the response or exceptions.

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
// Required, please ensure that the code running environment has set environment indicators ALIBABA_CLOUD_ACCESS_KEY_ID.
$config->accessKeyId = getenv("ALIBABA_CLOUD_ACCESS_KEY_ID");
// Required, please ensure that the code running environment has set environment indicators ALIBABA_CLOUD_ACCESS_KEY_SECRET.
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
[← Home](../../README.md) | Examples[(中文)](0-Examples-CN.md)
