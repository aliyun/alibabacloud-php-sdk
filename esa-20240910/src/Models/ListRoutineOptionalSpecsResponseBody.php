<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRoutineOptionalSpecsResponseBody\specs;

class ListRoutineOptionalSpecsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var specs[]
     */
    public $specs;
    protected $_name = [
        'requestId' => 'RequestId',
        'specs'     => 'Specs',
    ];

    public function validate()
    {
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->specs) {
            if (\is_array($this->specs)) {
                $res['Specs'] = [];
                $n1           = 0;
                foreach ($this->specs as $item1) {
                    $res['Specs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Specs'])) {
            if (!empty($map['Specs'])) {
                $model->specs = [];
                $n1           = 0;
                foreach ($map['Specs'] as $item1) {
                    $model->specs[$n1++] = specs::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
