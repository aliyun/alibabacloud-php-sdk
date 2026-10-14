<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class GetListGpuClusterRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var mixed
     */
    public $timeRegion;
    protected $_name = [
        'regionId' => 'regionId',
        'timeRegion' => 'timeRegion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->timeRegion) {
            $res['timeRegion'] = $this->timeRegion;
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['timeRegion'])) {
            $model->timeRegion = $map['timeRegion'];
        }

        return $model;
    }
}
