<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetNextResultToVerifyResponseBody\data\dialogues\dialogue\deltas\delta;

class deltas extends Model
{
    /**
     * @var delta[]
     */
    public $delta;
    protected $_name = [
        'delta' => 'Delta',
    ];

    public function validate()
    {
        if (\is_array($this->delta)) {
            Model::validateArray($this->delta);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delta) {
            if (\is_array($this->delta)) {
                $res['Delta'] = [];
                $n1 = 0;
                foreach ($this->delta as $item1) {
                    $res['Delta'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Delta'])) {
            if (!empty($map['Delta'])) {
                $model->delta = [];
                $n1 = 0;
                foreach ($map['Delta'] as $item1) {
                    $model->delta[$n1] = delta::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
