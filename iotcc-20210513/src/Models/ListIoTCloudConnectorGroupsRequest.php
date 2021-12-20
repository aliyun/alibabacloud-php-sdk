<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListIoTCloudConnectorGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $ioTCloudConnectorGroupIds;

    /**
     * @var string[]
     */
    public $ioTCloudConnectorGroupName;

    /**
     * @var string[]
     */
    public $ioTCloudConnectorGroupStatus;

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
    protected $_name = [
        'ioTCloudConnectorGroupIds'    => 'IoTCloudConnectorGroupIds',
        'ioTCloudConnectorGroupName'   => 'IoTCloudConnectorGroupName',
        'ioTCloudConnectorGroupStatus' => 'IoTCloudConnectorGroupStatus',
        'maxResults'                   => 'MaxResults',
        'nextToken'                    => 'NextToken',
        'regionId'                     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioTCloudConnectorGroupIds) {
            $res['IoTCloudConnectorGroupIds'] = $this->ioTCloudConnectorGroupIds;
        }
        if (null !== $this->ioTCloudConnectorGroupName) {
            $res['IoTCloudConnectorGroupName'] = $this->ioTCloudConnectorGroupName;
        }
        if (null !== $this->ioTCloudConnectorGroupStatus) {
            $res['IoTCloudConnectorGroupStatus'] = $this->ioTCloudConnectorGroupStatus;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIoTCloudConnectorGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoTCloudConnectorGroupIds'])) {
            if (!empty($map['IoTCloudConnectorGroupIds'])) {
                $model->ioTCloudConnectorGroupIds = $map['IoTCloudConnectorGroupIds'];
            }
        }
        if (isset($map['IoTCloudConnectorGroupName'])) {
            if (!empty($map['IoTCloudConnectorGroupName'])) {
                $model->ioTCloudConnectorGroupName = $map['IoTCloudConnectorGroupName'];
            }
        }
        if (isset($map['IoTCloudConnectorGroupStatus'])) {
            if (!empty($map['IoTCloudConnectorGroupStatus'])) {
                $model->ioTCloudConnectorGroupStatus = $map['IoTCloudConnectorGroupStatus'];
            }
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

        return $model;
    }
}
