<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceCredentialClientIdRequest extends Model
{
    /**
     * @description Group ID of the MQTT version of the micro message queue.
     *
     * This parameter is required.
     * @example GID_xxx
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the Cloud Message Queue MQTT version instance, which must match the actual instance ID used by the client. You can obtain this ID from the **Instance Details** page in the console.
     *
     * This parameter is required.
     * @example mqtt-xxxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Token for starting the next page query.
     *
     * @example FFdXXXXXWa
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Indicates the page number of the returned results. The starting page is counted from 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The maximum number of query records to display per page.
     * This parameter is required.
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
