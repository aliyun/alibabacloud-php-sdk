<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateNumberRequest\numbers;

class CreateNumberRequest extends Model
{
    /**
     * @var numbers[]
     */
    public $numbers;

    /**
     * @var string
     */
    public $trunkId;
    protected $_name = [
        'numbers' => 'Numbers',
        'trunkId' => 'TrunkId',
    ];

    public function validate()
    {
        if (\is_array($this->numbers)) {
            Model::validateArray($this->numbers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->numbers) {
            if (\is_array($this->numbers)) {
                $res['Numbers'] = [];
                $n1 = 0;
                foreach ($this->numbers as $item1) {
                    $res['Numbers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->trunkId) {
            $res['TrunkId'] = $this->trunkId;
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
        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = [];
                $n1 = 0;
                foreach ($map['Numbers'] as $item1) {
                    $model->numbers[$n1] = numbers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TrunkId'])) {
            $model->trunkId = $map['TrunkId'];
        }

        return $model;
    }
}
