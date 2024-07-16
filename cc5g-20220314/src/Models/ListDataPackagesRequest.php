<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListDataPackagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $dataPackageIds;

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
     * @var string[]
     */
    public $statuses;

    /**
     * @description This parameter is required.
     *
     * @example cc5g-xxxx
     *
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'dataPackageIds'           => 'DataPackageIds',
        'maxResults'               => 'MaxResults',
        'names'                    => 'Names',
        'nextToken'                => 'NextToken',
        'statuses'                 => 'Statuses',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackageIds) {
            $res['DataPackageIds'] = $this->dataPackageIds;
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
        if (null !== $this->statuses) {
            $res['Statuses'] = $this->statuses;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataPackagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackageIds'])) {
            if (!empty($map['DataPackageIds'])) {
                $model->dataPackageIds = $map['DataPackageIds'];
            }
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
        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = $map['Statuses'];
            }
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
