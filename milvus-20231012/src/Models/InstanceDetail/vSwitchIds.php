<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models\InstanceDetail;

use AlibabaCloud\Dara\Model;

class vSwitchIds extends Model
{
    /**
     * @var string
     */
    public $vswId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vswId' => 'vswId',
        'zoneId' => 'zoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vswId) {
            $res['vswId'] = $this->vswId;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['vswId'])) {
            $model->vswId = $map['vswId'];
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
