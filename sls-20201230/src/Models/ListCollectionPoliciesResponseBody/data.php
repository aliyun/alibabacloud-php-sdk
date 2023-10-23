<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody;

use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data\attribute;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data\centralizeConfig;
use AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data\policyConfig;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var attribute
     */
    public $attribute;

    /**
     * @var centralizeConfig
     */
    public $centralizeConfig;

    /**
     * @example false
     *
     * @var bool
     */
    public $centralizeEnabled;

    /**
     * @example access_log
     *
     * @var string
     */
    public $dataCode;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @var policyConfig
     */
    public $policyConfig;

    /**
     * @example your_log_policy
     *
     * @var string
     */
    public $policyName;

    /**
     * @example oss
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'attribute'         => 'attribute',
        'centralizeConfig'  => 'centralizeConfig',
        'centralizeEnabled' => 'centralizeEnabled',
        'dataCode'          => 'dataCode',
        'enabled'           => 'enabled',
        'policyConfig'      => 'policyConfig',
        'policyName'        => 'policyName',
        'productCode'       => 'productCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = null !== $this->attribute ? $this->attribute->toMap() : null;
        }
        if (null !== $this->centralizeConfig) {
            $res['centralizeConfig'] = null !== $this->centralizeConfig ? $this->centralizeConfig->toMap() : null;
        }
        if (null !== $this->centralizeEnabled) {
            $res['centralizeEnabled'] = $this->centralizeEnabled;
        }
        if (null !== $this->dataCode) {
            $res['dataCode'] = $this->dataCode;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->policyConfig) {
            $res['policyConfig'] = null !== $this->policyConfig ? $this->policyConfig->toMap() : null;
        }
        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = attribute::fromMap($map['attribute']);
        }
        if (isset($map['centralizeConfig'])) {
            $model->centralizeConfig = centralizeConfig::fromMap($map['centralizeConfig']);
        }
        if (isset($map['centralizeEnabled'])) {
            $model->centralizeEnabled = $map['centralizeEnabled'];
        }
        if (isset($map['dataCode'])) {
            $model->dataCode = $map['dataCode'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['policyConfig'])) {
            $model->policyConfig = policyConfig::fromMap($map['policyConfig']);
        }
        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        return $model;
    }
}
