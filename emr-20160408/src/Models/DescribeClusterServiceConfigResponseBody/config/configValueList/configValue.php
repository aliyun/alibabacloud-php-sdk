<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\configValueList;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue\configItemValueList;
use AlibabaCloud\Tea\Model;

class configValue extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $allowCustom;

    /**
     * @var configItemValueList
     */
    public $configItemValueList;

    /**
     * @example tez-site
     *
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $scope;

    /**
     * @example 0
     *
     * @var int
     */
    public $scopeId;
    protected $_name = [
        'allowCustom'         => 'AllowCustom',
        'configItemValueList' => 'ConfigItemValueList',
        'configName'          => 'ConfigName',
        'scope'               => 'Scope',
        'scopeId'             => 'ScopeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCustom) {
            $res['AllowCustom'] = $this->allowCustom;
        }
        if (null !== $this->configItemValueList) {
            $res['ConfigItemValueList'] = null !== $this->configItemValueList ? $this->configItemValueList->toMap() : null;
        }
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCustom'])) {
            $model->allowCustom = $map['AllowCustom'];
        }
        if (isset($map['ConfigItemValueList'])) {
            $model->configItemValueList = configItemValueList::fromMap($map['ConfigItemValueList']);
        }
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }

        return $model;
    }
}
