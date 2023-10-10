<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricConsortiumOrderersResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example ecs.n1.small
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example order1
     *
     * @var string
     */
    public $ordererName;

    /**
     * @example 7050
     *
     * @var int
     */
    public $port;

    /**
     * @example 1544411108000
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'domain'       => 'Domain',
        'instanceType' => 'InstanceType',
        'ordererName'  => 'OrdererName',
        'port'         => 'Port',
        'updateTime'   => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ordererName) {
            $res['OrdererName'] = $this->ordererName;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['OrdererName'])) {
            $model->ordererName = $map['OrdererName'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
