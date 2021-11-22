<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListConnectionPoolsRequest extends Model
{
    /**
     * @var string[]
     */
    public $connectionPoolIds;

    /**
     * @var string[]
     */
    public $connectionPoolName;

    /**
     * @var string[]
     */
    public $connectionPoolStatus;

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
    protected $_name = [
        'connectionPoolIds'    => 'ConnectionPoolIds',
        'connectionPoolName'   => 'ConnectionPoolName',
        'connectionPoolStatus' => 'ConnectionPoolStatus',
        'ioTCloudConnectorId'  => 'IoTCloudConnectorId',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'regionId'             => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPoolIds) {
            $res['ConnectionPoolIds'] = $this->connectionPoolIds;
        }
        if (null !== $this->connectionPoolName) {
            $res['ConnectionPoolName'] = $this->connectionPoolName;
        }
        if (null !== $this->connectionPoolStatus) {
            $res['ConnectionPoolStatus'] = $this->connectionPoolStatus;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionPoolsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPoolIds'])) {
            if (!empty($map['ConnectionPoolIds'])) {
                $model->connectionPoolIds = $map['ConnectionPoolIds'];
            }
        }
        if (isset($map['ConnectionPoolName'])) {
            if (!empty($map['ConnectionPoolName'])) {
                $model->connectionPoolName = $map['ConnectionPoolName'];
            }
        }
        if (isset($map['ConnectionPoolStatus'])) {
            if (!empty($map['ConnectionPoolStatus'])) {
                $model->connectionPoolStatus = $map['ConnectionPoolStatus'];
            }
        }
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

        return $model;
    }
}
