<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DetectImageBodiesResponseBody extends Model
{
    /**
     * @var Body[]
     */
    public $bodies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bodies' => 'Bodies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->bodies)) {
            Model::validateArray($this->bodies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodies) {
            if (\is_array($this->bodies)) {
                $res['Bodies'] = [];
                $n1 = 0;
                foreach ($this->bodies as $item1) {
                    $res['Bodies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['Bodies'])) {
            if (!empty($map['Bodies'])) {
                $model->bodies = [];
                $n1 = 0;
                foreach ($map['Bodies'] as $item1) {
                    $model->bodies[$n1++] = Body::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
