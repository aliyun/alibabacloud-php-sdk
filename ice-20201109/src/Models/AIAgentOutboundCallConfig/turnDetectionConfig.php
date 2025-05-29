<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;

class turnDetectionConfig extends Model
{
    /**
     * @var string[]
     */
    public $turnEndWords;
    protected $_name = [
        'turnEndWords' => 'TurnEndWords',
    ];

    public function validate()
    {
        if (\is_array($this->turnEndWords)) {
            Model::validateArray($this->turnEndWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->turnEndWords) {
            if (\is_array($this->turnEndWords)) {
                $res['TurnEndWords'] = [];
                $n1 = 0;
                foreach ($this->turnEndWords as $item1) {
                    $res['TurnEndWords'][$n1++] = $item1;
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
        if (isset($map['TurnEndWords'])) {
            if (!empty($map['TurnEndWords'])) {
                $model->turnEndWords = [];
                $n1 = 0;
                foreach ($map['TurnEndWords'] as $item1) {
                    $model->turnEndWords[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
