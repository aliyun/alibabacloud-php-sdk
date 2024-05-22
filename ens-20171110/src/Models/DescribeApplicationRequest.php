<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationRequest extends Model
{
    /**
     * @description The ID of the application. You can call the ListApplications operation to obtain the application ID.
     *
     * This parameter is required.
     * @example a2bac6f4-75dc-455e-8389-2dc8e47526d3
     *
     * @var string
     */
    public $appId;

    /**
     * @description The version number of the application. Separate multiple version numbers with commas (,). If you want to query data of all versions of applications, specify All for this parameter. By default, only data of applications in the stable versions are queried.
     *
     * @example v1,v2
     *
     * @var string
     */
    public $appVersions;

    /**
     * @description The region level by which edge resources of the application are collected. The value must be of the enumerated data type. Valid values:
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
     * @description Specifies whether to return other information about the application, such as statistics on resource instances and pods. The value must be a JSON string. By default, all information is returned.
     *
     * @example {\\"appInfo\\":true,\\"detailStat\\": true, \\"appVersionStat\\": true, \\"districtStat\\":true ,\\"instanceStat\\": true, \\"podCountStat\\": true}
     *
     * @var string
     */
    public $outDetailStatParams;

    /**
     * @var string
     */
    public $resourceSelector;
    protected $_name = [
        'appId'               => 'AppId',
        'appVersions'         => 'AppVersions',
        'level'               => 'Level',
        'outDetailStatParams' => 'OutDetailStatParams',
        'resourceSelector'    => 'ResourceSelector',
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
        if (null !== $this->appVersions) {
            $res['AppVersions'] = $this->appVersions;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->outDetailStatParams) {
            $res['OutDetailStatParams'] = $this->outDetailStatParams;
        }
        if (null !== $this->resourceSelector) {
            $res['ResourceSelector'] = $this->resourceSelector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersions'])) {
            $model->appVersions = $map['AppVersions'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['OutDetailStatParams'])) {
            $model->outDetailStatParams = $map['OutDetailStatParams'];
        }
        if (isset($map['ResourceSelector'])) {
            $model->resourceSelector = $map['ResourceSelector'];
        }

        return $model;
    }
}
