<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetDigitalEmployeeResponseBody\knowledges\bailian;

class knowledges extends Model
{
    /**
     * @var bailian[]
     */
    public $bailian;
    protected $_name = [
        'bailian' => 'bailian',
    ];

    public function validate()
    {
        if (\is_array($this->bailian)) {
            Model::validateArray($this->bailian);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bailian) {
            if (\is_array($this->bailian)) {
                $res['bailian'] = [];
                $n1 = 0;
                foreach ($this->bailian as $item1) {
                    $res['bailian'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['bailian'])) {
            if (!empty($map['bailian'])) {
                $model->bailian = [];
                $n1 = 0;
                foreach ($map['bailian'] as $item1) {
                    $model->bailian[$n1] = bailian::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
