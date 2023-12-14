<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribePayAsYouGoPriceResponseBody extends Model
{
    /**
     * @var float
     */
    public $cacheCloudEfficiencySizePrice;

    /**
     * @var float
     */
    public $cacheCloudSSDSizePrice;

    /**
     * @var float
     */
    public $cacheESSDPl1SizePrice;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var float
     */
    public $gatewayClassPrice;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'cacheCloudEfficiencySizePrice' => 'CacheCloudEfficiencySizePrice',
        'cacheCloudSSDSizePrice'        => 'CacheCloudSSDSizePrice',
        'cacheESSDPl1SizePrice'         => 'CacheESSDPl1SizePrice',
        'code'                          => 'Code',
        'currency'                      => 'Currency',
        'gatewayClassPrice'             => 'GatewayClassPrice',
        'message'                       => 'Message',
        'requestId'                     => 'RequestId',
        'success'                       => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cacheCloudEfficiencySizePrice) {
            $res['CacheCloudEfficiencySizePrice'] = $this->cacheCloudEfficiencySizePrice;
        }
        if (null !== $this->cacheCloudSSDSizePrice) {
            $res['CacheCloudSSDSizePrice'] = $this->cacheCloudSSDSizePrice;
        }
        if (null !== $this->cacheESSDPl1SizePrice) {
            $res['CacheESSDPl1SizePrice'] = $this->cacheESSDPl1SizePrice;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->gatewayClassPrice) {
            $res['GatewayClassPrice'] = $this->gatewayClassPrice;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePayAsYouGoPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CacheCloudEfficiencySizePrice'])) {
            $model->cacheCloudEfficiencySizePrice = $map['CacheCloudEfficiencySizePrice'];
        }
        if (isset($map['CacheCloudSSDSizePrice'])) {
            $model->cacheCloudSSDSizePrice = $map['CacheCloudSSDSizePrice'];
        }
        if (isset($map['CacheESSDPl1SizePrice'])) {
            $model->cacheESSDPl1SizePrice = $map['CacheESSDPl1SizePrice'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['GatewayClassPrice'])) {
            $model->gatewayClassPrice = $map['GatewayClassPrice'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
