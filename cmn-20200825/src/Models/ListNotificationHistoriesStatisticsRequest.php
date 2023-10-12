<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListNotificationHistoriesStatisticsRequest extends Model
{
    /**
     * @example 1609431000
     *
     * @var int
     */
    public $end;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDedicatedLine;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDevice;

    /**
     * @example true
     *
     * @var bool
     */
    public $isMonitorItem;

    /**
     * @example true
     *
     * @var bool
     */
    public $isPhysicalSpace;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example space-dec14rfcf1
     *
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @example 1609431000
     *
     * @var int
     */
    public $start;

    /**
     * @example SINGLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'end'             => 'End',
        'instanceId'      => 'InstanceId',
        'isDedicatedLine' => 'IsDedicatedLine',
        'isDevice'        => 'IsDevice',
        'isMonitorItem'   => 'IsMonitorItem',
        'isPhysicalSpace' => 'IsPhysicalSpace',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'physicalSpaceId' => 'PhysicalSpaceId',
        'start'           => 'Start',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isDedicatedLine) {
            $res['IsDedicatedLine'] = $this->isDedicatedLine;
        }
        if (null !== $this->isDevice) {
            $res['IsDevice'] = $this->isDevice;
        }
        if (null !== $this->isMonitorItem) {
            $res['IsMonitorItem'] = $this->isMonitorItem;
        }
        if (null !== $this->isPhysicalSpace) {
            $res['IsPhysicalSpace'] = $this->isPhysicalSpace;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNotificationHistoriesStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsDedicatedLine'])) {
            $model->isDedicatedLine = $map['IsDedicatedLine'];
        }
        if (isset($map['IsDevice'])) {
            $model->isDevice = $map['IsDevice'];
        }
        if (isset($map['IsMonitorItem'])) {
            $model->isMonitorItem = $map['IsMonitorItem'];
        }
        if (isset($map['IsPhysicalSpace'])) {
            $model->isPhysicalSpace = $map['IsPhysicalSpace'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
