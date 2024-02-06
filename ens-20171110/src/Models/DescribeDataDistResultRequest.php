<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataDistResultRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example e76f8985-7965-41fc-925b-9648bb6bf650
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the data file. Separate multiple names with commas (,). By default, all data files are queried.
     *
     * @example cloudgame-shanghai/deploy_app/20220215/1644895216305ACG_M21B-ota-1.1.2-D-0215.0628_V1_0002-pre-weiduan.zip
     *
     * @var string
     */
    public $dataNames;

    /**
     * @description The version number of the data file. Separate multiple numbers with commas (,). By default, all versions of data files are queried.
     *
     * @example 4885
     *
     * @var string
     */
    public $dataVersions;

    /**
     * @description The IDs of the ENS nodes.
     *
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @description The IDs of ENS instances. Separate multiple IDs with commas (,). By default, all instances are queried.
     *
     * @example i-7ecpqvkicnchxccozrp,i-6ecpqvkicnchxccozrp
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The end of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-01
     *
     * @var string
     */
    public $maxDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-01-02
     *
     * @var string
     */
    public $minDate;

    /**
     * @description The page number. Pages start from page 1. This parameter is optional if you want to return the distribution status of all data files.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. This parameter is optional if you want to return the distribution status of all data files.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appId'        => 'AppId',
        'dataNames'    => 'DataNames',
        'dataVersions' => 'DataVersions',
        'ensRegionIds' => 'EnsRegionIds',
        'instanceIds'  => 'InstanceIds',
        'maxDate'      => 'MaxDate',
        'minDate'      => 'MinDate',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->dataNames) {
            $res['DataNames'] = $this->dataNames;
        }
        if (null !== $this->dataVersions) {
            $res['DataVersions'] = $this->dataVersions;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }
        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataDistResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataNames'])) {
            $model->dataNames = $map['DataNames'];
        }
        if (isset($map['DataVersions'])) {
            $model->dataVersions = $map['DataVersions'];
        }
        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = $map['EnsRegionIds'];
            }
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }
        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
