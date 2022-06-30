<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class ModifyWebRuleRequest extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $httpsExt;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $proxyTypes;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var int
     */
    public $rsType;
    protected $_name = [
        'domain'          => 'Domain',
        'httpsExt'        => 'HttpsExt',
        'instanceIds'     => 'InstanceIds',
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
        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
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
     * @return ModifyWebRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['HttpsExt'])) {
            $model->httpsExt = $map['HttpsExt'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ProxyTypes'])) {
            $model->proxyTypes = $map['ProxyTypes'];
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
