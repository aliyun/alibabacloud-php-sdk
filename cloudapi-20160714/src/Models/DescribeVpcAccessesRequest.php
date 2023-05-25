<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcAccessesRequest extends Model
{
    /**
     * @example 10.199.26.***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example wuying-edm-svc
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 8080
     *
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example vpc-*****ssds24
     *
     * @var string
     */
    public $vpcAccessId;

    /**
     * @example vpc-uf657qec7lx42paw3qxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'name'          => 'Name',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'port'          => 'Port',
        'securityToken' => 'SecurityToken',
        'vpcAccessId'   => 'VpcAccessId',
        'vpcId'         => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->vpcAccessId) {
            $res['VpcAccessId'] = $this->vpcAccessId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcAccessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['VpcAccessId'])) {
            $model->vpcAccessId = $map['VpcAccessId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
