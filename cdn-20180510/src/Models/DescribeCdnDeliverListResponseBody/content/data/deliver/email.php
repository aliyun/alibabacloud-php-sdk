<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data\deliver;

use AlibabaCloud\Dara\Model;

class email extends Model
{
    /**
     * @var string[]
     */
    public $to;
    protected $_name = [
        'to' => 'to',
    ];

    public function validate()
    {
        if (\is_array($this->to)) {
            Model::validateArray($this->to);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->to) {
            if (\is_array($this->to)) {
                $res['to'] = [];
                $n1 = 0;
                foreach ($this->to as $item1) {
                    $res['to'][$n1] = $item1;
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
        if (isset($map['to'])) {
            if (!empty($map['to'])) {
                $model->to = [];
                $n1 = 0;
                foreach ($map['to'] as $item1) {
                    $model->to[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
