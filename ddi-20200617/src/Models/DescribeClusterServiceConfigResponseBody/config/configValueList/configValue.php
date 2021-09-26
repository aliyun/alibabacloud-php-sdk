<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\configValueList;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterServiceConfigResponseBody\config\configValueList\configValue\configItemValueList;
use AlibabaCloud\Tea\Model;

class configValue extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var int
     */
    public $scopeId;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var bool
     */
    public $allowCustom;

    /**
     * @var configItemValueList
     */
    public $configItemValueList;
    protected $_name = [
        'configName'          => 'ConfigName',
        'scopeId'             => 'ScopeId',
        'scope'               => 'Scope',
        'allowCustom'         => 'AllowCustom',
        'configItemValueList' => 'ConfigItemValueList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->scopeId) {
            $res['ScopeId'] = $this->scopeId;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->allowCustom) {
            $res['AllowCustom'] = $this->allowCustom;
        }
        if (null !== $this->configItemValueList) {
            $res['ConfigItemValueList'] = null !== $this->configItemValueList ? $this->configItemValueList->toMap() : null;
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
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ScopeId'])) {
            $model->scopeId = $map['ScopeId'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['AllowCustom'])) {
            $model->allowCustom = $map['AllowCustom'];
        }
        if (isset($map['ConfigItemValueList'])) {
            $model->configItemValueList = configItemValueList::fromMap($map['ConfigItemValueList']);
        }

        return $model;
    }
}
