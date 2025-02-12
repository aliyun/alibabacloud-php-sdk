<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeSceneDefenseObjectsResponseBody\objects;

class DescribeSceneDefenseObjectsResponseBody extends Model
{
    /**
     * @var objects[]
     */
    public $objects;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'objects'   => 'Objects',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->objects)) {
            Model::validateArray($this->objects);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->objects) {
            if (\is_array($this->objects)) {
                $res['Objects'] = [];
                $n1             = 0;
                foreach ($this->objects as $item1) {
                    $res['Objects'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n1             = 0;
                foreach ($map['Objects'] as $item1) {
                    $model->objects[$n1++] = objects::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
