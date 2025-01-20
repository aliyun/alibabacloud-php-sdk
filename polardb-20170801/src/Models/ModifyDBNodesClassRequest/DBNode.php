<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\ModifyDBNodesClassRequest;

use AlibabaCloud\Dara\Model;

class DBNode extends Model
{
    /**
     * @var string
     */
    public $DBNodeId;
    /**
     * @var string
     */
    public $targetClass;
    protected $_name = [
        'DBNodeId'    => 'DBNodeId',
        'targetClass' => 'TargetClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->targetClass) {
            $res['TargetClass'] = $this->targetClass;
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
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['TargetClass'])) {
            $model->targetClass = $map['TargetClass'];
        }

        return $model;
    }
}
