<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListInspectionTasksShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $alarmStatusShrink;

    /**
     * @example NETWORK
     *
     * @var string
     */
    public $deviceType;

    /**
     * @example ASW-S-3F1-1.CD1
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $IP;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ITEMsjie22342
     *
     * @var string
     */
    public $itemId;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example SAG-100WM
     *
     * @var string
     */
    public $model;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example ASW
     *
     * @var string
     */
    public $role;

    /**
     * @example XX门店
     *
     * @var string
     */
    public $space;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example Alibaba
     *
     * @var string
     */
    public $vendor;
    protected $_name = [
        'alarmStatusShrink' => 'AlarmStatus',
        'deviceType'        => 'DeviceType',
        'hostName'          => 'HostName',
        'IP'                => 'IP',
        'instanceId'        => 'InstanceId',
        'itemId'            => 'ItemId',
        'maxResults'        => 'MaxResults',
        'model'             => 'Model',
        'nextToken'         => 'NextToken',
        'role'              => 'Role',
        'space'             => 'Space',
        'taskStatus'        => 'TaskStatus',
        'vendor'            => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmStatusShrink) {
            $res['AlarmStatus'] = $this->alarmStatusShrink;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->space) {
            $res['Space'] = $this->space;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInspectionTasksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmStatus'])) {
            $model->alarmStatusShrink = $map['AlarmStatus'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['Space'])) {
            $model->space = $map['Space'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
