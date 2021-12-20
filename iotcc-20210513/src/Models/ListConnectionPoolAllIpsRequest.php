<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IoTCC\V20210513\Models;

use AlibabaCloud\Tea\Model;

class ListConnectionPoolAllIpsRequest extends Model
{
    /**
     * @var string
     */
    public $connectionPoolId;

    /**
     * @var string
     */
    public $ioTCloudConnectorId;

    /**
     * @var string
     */
    public $ip;

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
     * @var string
     */
    public $type;
    protected $_name = [
        'connectionPoolId'    => 'ConnectionPoolId',
        'ioTCloudConnectorId' => 'IoTCloudConnectorId',
        'ip'                  => 'Ip',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'type'                => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionPoolId) {
            $res['ConnectionPoolId'] = $this->connectionPoolId;
        }
        if (null !== $this->ioTCloudConnectorId) {
            $res['IoTCloudConnectorId'] = $this->ioTCloudConnectorId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionPoolAllIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionPoolId'])) {
            $model->connectionPoolId = $map['ConnectionPoolId'];
        }
        if (isset($map['IoTCloudConnectorId'])) {
            $model->ioTCloudConnectorId = $map['IoTCloudConnectorId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
