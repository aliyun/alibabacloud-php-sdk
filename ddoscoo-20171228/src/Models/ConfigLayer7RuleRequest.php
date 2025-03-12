<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class ConfigLayer7RuleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example www.aliyun.com
     *
     * @var string
     */
    public $domain;

    /**
     * @example ddoscoo-cn-XXXXXX
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example [{"ProxyPorts":[80,8080],"ProxyType":"http"},{"ProxyPorts":[443],"ProxyType":"https"}]rts\\":[443],\\"ProxyType\\":\\"https\\"}]
     *
     * @var string
     */
    public $proxyTypeList;

    /**
     * @example [{"ProxyPorts":[80,8080],"ProxyType":"http"},{"ProxyPorts":[443],"ProxyType":"https"}]rts\\":[443],\\"ProxyType\\":\\"https\\"}]
     *
     * @var string[]
     */
    public $proxyTypes;

    /**
     * @description This parameter is required.
     *
     * @example 1.1.1.1
     *
     * @var string[]
     */
    public $realServers;

    /**
     * @example test
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $rsType;
    protected $_name = [
        'domain'          => 'Domain',
        'instanceIds'     => 'InstanceIds',
        'proxyTypeList'   => 'ProxyTypeList',
        'proxyTypes'      => 'ProxyTypes',
        'realServers'     => 'RealServers',
        'resourceGroupId' => 'ResourceGroupId',
        'rsType'          => 'RsType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->proxyTypeList) {
            $res['ProxyTypeList'] = $this->proxyTypeList;
        }
        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = $this->proxyTypes;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigLayer7RuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ProxyTypeList'])) {
            $model->proxyTypeList = $map['ProxyTypeList'];
        }
        if (isset($map['ProxyTypes'])) {
            if (!empty($map['ProxyTypes'])) {
                $model->proxyTypes = $map['ProxyTypes'];
            }
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['RsType'])) {
            $model->rsType = $map['RsType'];
        }

        return $model;
    }
}
