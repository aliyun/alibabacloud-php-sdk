<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @description The version number of the application. Separate multiple version numbers with commas (,). If you want to query data of all versions of applications, specify All for this parameter. By default, only data of applications in the stable versions are queried.
     *
     * @example v1,v2
     *
     * @var string
     */
    public $appVersions;

    /**
     * @description The name of the application cluster. Separate multiple names with commas (,). If you want to query applications of all clusters in your account, specify All for this parameter. Default value: All.
     *
     * @example poc,pre
     *
     * @var string
     */
    public $clusterNames;

    /**
     * @description The region level by which edge resources of the application are collected. The value is of the enumeration type. Valid values:
     *
     *   National: Chinese mainland
     *   Big: area
     *   Middle: province
     *   Small: city
     *   RegionId: edge node
     *
     * Default value: National.
     * @example National
     *
     * @var string
     */
    public $level;

    /**
     * @description The end of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-20
     *
     * @var string
     */
    public $maxDate;

    /**
     * @description The beginning of the time range to query. Specify the time in the 2006-01-02 format. By default, the time range to query is not restricted.
     *
     * @example 2022-02-15
     *
     * @var string
     */
    public $minDate;

    /**
     * @description Specifies whether to return other information about the application, such as statistics on resource instances and pods. The value must be a JSON string. By default, all information is returned.
     *
     * @example {\"appInfo\":true,\"detailStat\": true, \"appVersionStat\": true, \"districtStat\":true ,\"instanceStat\": true, \"podCountStat\": true}
     *
     * @var string
     */
    public $outAppInfoParams;

    /**
     * @description The page number. Pages start from page 1. This parameter is optional if you want to return all information about the applications.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. This parameter is optional if you want to return all information about the applications.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appVersions'      => 'AppVersions',
        'clusterNames'     => 'ClusterNames',
        'level'            => 'Level',
        'maxDate'          => 'MaxDate',
        'minDate'          => 'MinDate',
        'outAppInfoParams' => 'OutAppInfoParams',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appVersions) {
            $res['AppVersions'] = $this->appVersions;
        }
        if (null !== $this->clusterNames) {
            $res['ClusterNames'] = $this->clusterNames;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }
        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }
        if (null !== $this->outAppInfoParams) {
            $res['OutAppInfoParams'] = $this->outAppInfoParams;
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
     * @return ListApplicationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppVersions'])) {
            $model->appVersions = $map['AppVersions'];
        }
        if (isset($map['ClusterNames'])) {
            $model->clusterNames = $map['ClusterNames'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }
        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }
        if (isset($map['OutAppInfoParams'])) {
            $model->outAppInfoParams = $map['OutAppInfoParams'];
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
