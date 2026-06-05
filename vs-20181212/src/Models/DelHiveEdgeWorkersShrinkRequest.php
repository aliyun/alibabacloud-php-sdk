<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DelHiveEdgeWorkersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hiveId;

    /**
     * @var string
     */
    public $instanceIdsShrink;
    protected $_name = [
        'hiveId' => 'HiveId',
        'instanceIdsShrink' => 'InstanceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hiveId) {
            $res['HiveId'] = $this->hiveId;
        }

        if (null !== $this->instanceIdsShrink) {
            $res['InstanceIds'] = $this->instanceIdsShrink;
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
        if (isset($map['HiveId'])) {
            $model->hiveId = $map['HiveId'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIdsShrink = $map['InstanceIds'];
        }

        return $model;
    }
}
