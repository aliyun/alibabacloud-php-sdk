<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;

class turnDetectionConfig extends Model
{
    /**
     * @var string
     */
    public $eagerness;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $semanticWaitDuration;

    /**
     * @var string[]
     */
    public $turnEndWords;
    protected $_name = [
        'eagerness' => 'Eagerness',
        'mode' => 'Mode',
        'semanticWaitDuration' => 'SemanticWaitDuration',
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
        if (null !== $this->eagerness) {
            $res['Eagerness'] = $this->eagerness;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->semanticWaitDuration) {
            $res['SemanticWaitDuration'] = $this->semanticWaitDuration;
        }

        if (null !== $this->turnEndWords) {
            if (\is_array($this->turnEndWords)) {
                $res['TurnEndWords'] = [];
                $n1 = 0;
                foreach ($this->turnEndWords as $item1) {
                    $res['TurnEndWords'][$n1] = $item1;
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
        if (isset($map['Eagerness'])) {
            $model->eagerness = $map['Eagerness'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['SemanticWaitDuration'])) {
            $model->semanticWaitDuration = $map['SemanticWaitDuration'];
        }

        if (isset($map['TurnEndWords'])) {
            if (!empty($map['TurnEndWords'])) {
                $model->turnEndWords = [];
                $n1 = 0;
                foreach ($map['TurnEndWords'] as $item1) {
                    $model->turnEndWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
