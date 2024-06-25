<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class SetHdMonitorRegionConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hdmonitor-cn-hangzhou-223794579283657556
     *
     * @var string
     */
    public $logProject;

    /**
     * @description This parameter is required.
     *
     * @example hdmonitor-cn-hangzhou-metricStore-1
     *
     * @var string
     */
    public $metricStore;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logProject'  => 'LogProject',
        'metricStore' => 'MetricStore',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logProject) {
            $res['LogProject'] = $this->logProject;
        }
        if (null !== $this->metricStore) {
            $res['MetricStore'] = $this->metricStore;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetHdMonitorRegionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogProject'])) {
            $model->logProject = $map['LogProject'];
        }
        if (isset($map['MetricStore'])) {
            $model->metricStore = $map['MetricStore'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
