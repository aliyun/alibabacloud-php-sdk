<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceCredentialClientIdRequest extends Model
{
    /**
     * @example GID_xxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @example mqtt-xxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @example 100
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'groupId'    => 'GroupId',
        'instanceId' => 'InstanceId',
        'nextToken'  => 'NextToken',
        'pageNo'     => 'PageNo',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceCredentialClientIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
