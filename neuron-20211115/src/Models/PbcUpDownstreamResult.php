<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcUpDownstreamResult extends Model
{
    /**
     * @var PbcRelationItem[]
     */
    public $pbcItems;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pbcItems' => 'pbcItems',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->pbcItems)) {
            Model::validateArray($this->pbcItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pbcItems) {
            if (\is_array($this->pbcItems)) {
                $res['pbcItems'] = [];
                $n1 = 0;
                foreach ($this->pbcItems as $item1) {
                    $res['pbcItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['pbcItems'])) {
            if (!empty($map['pbcItems'])) {
                $model->pbcItems = [];
                $n1 = 0;
                foreach ($map['pbcItems'] as $item1) {
                    $model->pbcItems[$n1] = PbcRelationItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
