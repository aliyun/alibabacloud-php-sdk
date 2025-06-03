<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView\parts;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateMessageRequest\messages\content\structView\parts\recommendPart\recommends;

class recommendPart extends Model
{
    /**
     * @var recommends[]
     */
    public $recommends;
    protected $_name = [
        'recommends' => 'recommends',
    ];

    public function validate()
    {
        if (\is_array($this->recommends)) {
            Model::validateArray($this->recommends);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommends) {
            if (\is_array($this->recommends)) {
                $res['recommends'] = [];
                $n1 = 0;
                foreach ($this->recommends as $item1) {
                    $res['recommends'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['recommends'])) {
            if (!empty($map['recommends'])) {
                $model->recommends = [];
                $n1 = 0;
                foreach ($map['recommends'] as $item1) {
                    $model->recommends[$n1++] = recommends::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
