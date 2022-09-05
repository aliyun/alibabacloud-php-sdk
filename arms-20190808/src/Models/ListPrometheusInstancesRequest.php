<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class ListPrometheusInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var bool
     */
    public $showGlobalView;
    protected $_name = [
        'regionId'       => 'RegionId',
        'showGlobalView' => 'ShowGlobalView',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showGlobalView) {
            $res['ShowGlobalView'] = $this->showGlobalView;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowGlobalView'])) {
            $model->showGlobalView = $map['ShowGlobalView'];
        }

        return $model;
    }
}
