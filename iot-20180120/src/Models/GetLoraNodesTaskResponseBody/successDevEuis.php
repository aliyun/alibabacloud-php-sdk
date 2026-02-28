<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetLoraNodesTaskResponseBody;

use AlibabaCloud\Dara\Model;

class successDevEuis extends Model
{
    /**
     * @var string[]
     */
    public $successDevEui;
    protected $_name = [
        'successDevEui' => 'SuccessDevEui',
    ];

    public function validate()
    {
        if (\is_array($this->successDevEui)) {
            Model::validateArray($this->successDevEui);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->successDevEui) {
            if (\is_array($this->successDevEui)) {
                $res['SuccessDevEui'] = [];
                $n1 = 0;
                foreach ($this->successDevEui as $item1) {
                    $res['SuccessDevEui'][$n1] = $item1;
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
        if (isset($map['SuccessDevEui'])) {
            if (!empty($map['SuccessDevEui'])) {
                $model->successDevEui = [];
                $n1 = 0;
                foreach ($map['SuccessDevEui'] as $item1) {
                    $model->successDevEui[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
