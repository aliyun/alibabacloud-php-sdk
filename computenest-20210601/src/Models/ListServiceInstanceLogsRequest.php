<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class ListServiceInstanceLogsRequest extends Model
{
    /**
     * @var string
     */
    public $logSource;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example BBBAAfu+XtuBE55iRLHEYYuojI4=
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
     * @example si-70a3b15bb626435b****
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'logSource'         => 'LogSource',
        'logstore'          => 'Logstore',
        'maxResults'        => 'MaxResults',
        'nextToken'         => 'NextToken',
        'regionId'          => 'RegionId',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
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
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
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
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
