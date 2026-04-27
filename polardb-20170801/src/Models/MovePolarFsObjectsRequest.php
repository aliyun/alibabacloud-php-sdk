<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\MovePolarFsObjectsRequest\objectsToMove;

class MovePolarFsObjectsRequest extends Model
{
    /**
     * @var objectsToMove[]
     */
    public $objectsToMove;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'objectsToMove' => 'ObjectsToMove',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->objectsToMove)) {
            Model::validateArray($this->objectsToMove);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objectsToMove) {
            if (\is_array($this->objectsToMove)) {
                $res['ObjectsToMove'] = [];
                $n1 = 0;
                foreach ($this->objectsToMove as $item1) {
                    $res['ObjectsToMove'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['ObjectsToMove'])) {
            if (!empty($map['ObjectsToMove'])) {
                $model->objectsToMove = [];
                $n1 = 0;
                foreach ($map['ObjectsToMove'] as $item1) {
                    $model->objectsToMove[$n1] = objectsToMove::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
