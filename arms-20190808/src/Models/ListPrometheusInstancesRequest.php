<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class ListPrometheusInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $showGlobalView;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'regionId' => 'RegionId',
        'showGlobalView' => 'ShowGlobalView',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->showGlobalView) {
            $res['ShowGlobalView'] = $this->showGlobalView;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ShowGlobalView'])) {
            $model->showGlobalView = $map['ShowGlobalView'];
        }

        return $model;
    }
}
