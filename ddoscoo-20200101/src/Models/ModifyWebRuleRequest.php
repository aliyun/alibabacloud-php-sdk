<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->realServers)) {
            Model::validateArray($this->realServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->httpsExt) {
            $res['HttpsExt'] = $this->httpsExt;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1                 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->proxyTypes) {
            $res['ProxyTypes'] = $this->proxyTypes;
        }

        if (null !== $this->realServers) {
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1                 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->rsType) {
            $res['RsType'] = $this->rsType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->instanceIds = [];
                $n1                 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProxyTypes'])) {
            $model->proxyTypes = $map['ProxyTypes'];
        }

        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n1                 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1++] = $item1;
                }
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
