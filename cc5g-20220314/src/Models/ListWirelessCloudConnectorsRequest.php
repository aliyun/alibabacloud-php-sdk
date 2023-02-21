<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListWirelessCloudConnectorsRequest extends Model
{
    /**
     * @example Business
     *
     * @var string
     */
    public $businessType;

    /**
     * @example false
     *
     * @var string
     */
    public $isInGroup;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $names;

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
    public $statuses;

    /**
     * @example cc5gg-****
     *
     * @var string
     */
    public $wirelessCloudConnectorGroupId;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorIds;
    protected $_name = [
        'businessType'                  => 'BusinessType',
        'isInGroup'                     => 'IsInGroup',
        'maxResults'                    => 'MaxResults',
        'names'                         => 'Names',
        'nextToken'                     => 'NextToken',
        'regionId'                      => 'RegionId',
        'statuses'                      => 'Statuses',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
        'wirelessCloudConnectorIds'     => 'WirelessCloudConnectorIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->isInGroup) {
            $res['IsInGroup'] = $this->isInGroup;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }
        if (null !== $this->wirelessCloudConnectorIds) {
            $res['WirelessCloudConnectorIds'] = $this->wirelessCloudConnectorIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWirelessCloudConnectorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['IsInGroup'])) {
            $model->isInGroup = $map['IsInGroup'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }
        if (isset($map['WirelessCloudConnectorIds'])) {
            if (!empty($map['WirelessCloudConnectorIds'])) {
                $model->wirelessCloudConnectorIds = $map['WirelessCloudConnectorIds'];
            }
        }

        return $model;
    }
}
