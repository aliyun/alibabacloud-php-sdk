<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;

class CheckInventoryRequest extends Model
{
    /**
     * @var string
     */
    public $clusterInfo;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterInfo' => 'ClusterInfo',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterInfo) {
            $res['ClusterInfo'] = $this->clusterInfo;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClusterInfo'])) {
            $model->clusterInfo = $map['ClusterInfo'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
