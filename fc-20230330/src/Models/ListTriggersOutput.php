<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class ListTriggersOutput extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var Trigger[]
     */
    public $triggers;
    protected $_name = [
        'nextToken' => 'nextToken',
        'triggers' => 'triggers',
    ];

    public function validate()
    {
        if (\is_array($this->triggers)) {
            Model::validateArray($this->triggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->triggers) {
            if (\is_array($this->triggers)) {
                $res['triggers'] = [];
                $n1 = 0;
                foreach ($this->triggers as $item1) {
                    $res['triggers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['triggers'])) {
            if (!empty($map['triggers'])) {
                $model->triggers = [];
                $n1 = 0;
                foreach ($map['triggers'] as $item1) {
                    $model->triggers[$n1] = Trigger::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
