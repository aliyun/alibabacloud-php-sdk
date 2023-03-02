<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class ApplyDataModelConfigInfoRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example {\"productKey\":\"a1lPbm9Yq0v\"}
     *
     * @var string
     */
    public $configuration;

    /**
     * @example DF3K
     *
     * @var string
     */
    public $dataModelCode;

    /**
     * @example HB5jyvZWz******g
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'apiVersion'    => 'ApiVersion',
        'configuration' => 'Configuration',
        'dataModelCode' => 'DataModelCode',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->dataModelCode) {
            $res['DataModelCode'] = $this->dataModelCode;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyDataModelConfigInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['DataModelCode'])) {
            $model->dataModelCode = $map['DataModelCode'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
