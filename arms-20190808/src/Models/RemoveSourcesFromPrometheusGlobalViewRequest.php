<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class RemoveSourcesFromPrometheusGlobalViewRequest extends Model
{
    /**
     * @description The ID of the global aggregation instance.
     *
     * This parameter is required.
     * @example global-v2-cn-1478326682034601-vss8pd0i
     *
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @description The name of the global aggregation instance.
     *
     * This parameter is required.
     * @example zyGlobalView
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The list of custom data sources. You can specify multiple data sources and separate them with commas (,).
     *
     * This parameter is required.
     * @example localPrometheusClusterName,testCumterPrometheusName
     *
     * @var string
     */
    public $sourceNames;
    protected $_name = [
        'globalViewClusterId' => 'GlobalViewClusterId',
        'groupName'           => 'GroupName',
        'regionId'            => 'RegionId',
        'sourceNames'         => 'SourceNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sourceNames) {
            $res['SourceNames'] = $this->sourceNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveSourcesFromPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SourceNames'])) {
            $model->sourceNames = $map['SourceNames'];
        }

        return $model;
    }
}
