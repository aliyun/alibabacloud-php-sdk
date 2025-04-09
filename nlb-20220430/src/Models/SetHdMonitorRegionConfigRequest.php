<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Dara\Model;

class SetHdMonitorRegionConfigRequest extends Model
{
    /**
     * @var string
     */
    public $logProject;

    /**
     * @var string
     */
    public $metricStore;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logProject' => 'LogProject',
        'metricStore' => 'MetricStore',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
