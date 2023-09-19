<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GetInventorySchemaRequest extends Model
{
    /**
     * @description Specifies whether to return only properties that support the aggregate feature in the configuration list. Valid values:
     *
     *   true: only returns properties that support the aggregate feature in the configuration list.
     *   false: returns all properties in the configuration list.
     *
     * @example false
     *
     * @var bool
     */
    public $aggregator;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example gAAAAABfh8MVLQI9AuKGACLgjbsXbWs-Mna47IDM6tr6wK7TZ1
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The configuration list type name. Valid values:
     *
     *   ACS:InstanceInformation
     *   ACS:Application
     *   ACS:File
     *   ACS:Network
     *   ACS:WindowsRole
     *   ACS:Service
     *   ACS:WindowsUpdate
     *   ACS:WindowsRegistry
     *
     * @example ACS:Application
     *
     * @var string
     */
    public $typeName;
    protected $_name = [
        'aggregator' => 'Aggregator',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'regionId'   => 'RegionId',
        'typeName'   => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregator) {
            $res['Aggregator'] = $this->aggregator;
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
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInventorySchemaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregator'])) {
            $model->aggregator = $map['Aggregator'];
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
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
