<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListServiceRequest extends Model
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
    public $resourceStatuses;

    /**
     * @var string[]
     */
    public $serviceIds;

    /**
     * @var string[]
     */
    public $serviceNames;
    protected $_name = [
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'resourceStatuses'    => 'ResourceStatuses',
        'serviceIds'          => 'ServiceIds',
        'serviceNames'        => 'ServiceNames',
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
        if (null !== $this->resourceStatuses) {
            $res['ResourceStatuses'] = $this->resourceStatuses;
        }
        if (null !== $this->serviceIds) {
            $res['ServiceIds'] = $this->serviceIds;
        }
        if (null !== $this->serviceNames) {
            $res['ServiceNames'] = $this->serviceNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceRequest
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
        if (isset($map['ResourceStatuses'])) {
            if (!empty($map['ResourceStatuses'])) {
                $model->resourceStatuses = $map['ResourceStatuses'];
            }
        }
        if (isset($map['ServiceIds'])) {
            if (!empty($map['ServiceIds'])) {
                $model->serviceIds = $map['ServiceIds'];
            }
        }
        if (isset($map['ServiceNames'])) {
            if (!empty($map['ServiceNames'])) {
                $model->serviceNames = $map['ServiceNames'];
            }
        }

        return $model;
    }
}
