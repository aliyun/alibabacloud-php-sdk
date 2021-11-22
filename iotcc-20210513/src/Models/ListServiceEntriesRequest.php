<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListServiceEntriesRequest extends Model
{
    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $serviceEntryIds;

    /**
     * @var string[]
     */
    public $serviceEntryName;

    /**
     * @var string[]
     */
    public $serviceEntryStatus;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string[]
     */
    public $target;

    /**
     * @var string[]
     */
    public $targetType;
    protected $_name = [
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'serviceEntryIds'     => 'ServiceEntryIds',
        'serviceEntryName'    => 'ServiceEntryName',
        'serviceEntryStatus'  => 'ServiceEntryStatus',
        'serviceId'           => 'ServiceId',
        'target'              => 'Target',
        'targetType'          => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceEntryIds) {
            $res['ServiceEntryIds'] = $this->serviceEntryIds;
        }
        if (null !== $this->serviceEntryName) {
            $res['ServiceEntryName'] = $this->serviceEntryName;
        }
        if (null !== $this->serviceEntryStatus) {
            $res['ServiceEntryStatus'] = $this->serviceEntryStatus;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceEntryIds'])) {
            if (!empty($map['ServiceEntryIds'])) {
                $model->serviceEntryIds = $map['ServiceEntryIds'];
            }
        }
        if (isset($map['ServiceEntryName'])) {
            if (!empty($map['ServiceEntryName'])) {
                $model->serviceEntryName = $map['ServiceEntryName'];
            }
        }
        if (isset($map['ServiceEntryStatus'])) {
            if (!empty($map['ServiceEntryStatus'])) {
                $model->serviceEntryStatus = $map['ServiceEntryStatus'];
            }
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Target'])) {
            if (!empty($map['Target'])) {
                $model->target = $map['Target'];
            }
        }
        if (isset($map['TargetType'])) {
            if (!empty($map['TargetType'])) {
                $model->targetType = $map['TargetType'];
            }
        }

        return $model;
    }
}
