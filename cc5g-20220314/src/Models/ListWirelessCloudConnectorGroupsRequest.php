<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListWirelessCloudConnectorGroupsRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorGroupIds;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorGroupNames;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorGroupStatus;
    protected $_name = [
        'maxResults'                        => 'MaxResults',
        'nextToken'                         => 'NextToken',
        'regionId'                          => 'RegionId',
        'wirelessCloudConnectorGroupIds'    => 'WirelessCloudConnectorGroupIds',
        'wirelessCloudConnectorGroupNames'  => 'WirelessCloudConnectorGroupNames',
        'wirelessCloudConnectorGroupStatus' => 'WirelessCloudConnectorGroupStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->wirelessCloudConnectorGroupIds) {
            $res['WirelessCloudConnectorGroupIds'] = $this->wirelessCloudConnectorGroupIds;
        }
        if (null !== $this->wirelessCloudConnectorGroupNames) {
            $res['WirelessCloudConnectorGroupNames'] = $this->wirelessCloudConnectorGroupNames;
        }
        if (null !== $this->wirelessCloudConnectorGroupStatus) {
            $res['WirelessCloudConnectorGroupStatus'] = $this->wirelessCloudConnectorGroupStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWirelessCloudConnectorGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WirelessCloudConnectorGroupIds'])) {
            if (!empty($map['WirelessCloudConnectorGroupIds'])) {
                $model->wirelessCloudConnectorGroupIds = $map['WirelessCloudConnectorGroupIds'];
            }
        }
        if (isset($map['WirelessCloudConnectorGroupNames'])) {
            if (!empty($map['WirelessCloudConnectorGroupNames'])) {
                $model->wirelessCloudConnectorGroupNames = $map['WirelessCloudConnectorGroupNames'];
            }
        }
        if (isset($map['WirelessCloudConnectorGroupStatus'])) {
            if (!empty($map['WirelessCloudConnectorGroupStatus'])) {
                $model->wirelessCloudConnectorGroupStatus = $map['WirelessCloudConnectorGroupStatus'];
            }
        }

        return $model;
    }
}
