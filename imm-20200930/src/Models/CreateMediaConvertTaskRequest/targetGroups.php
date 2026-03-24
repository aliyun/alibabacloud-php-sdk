<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targetGroups\targets;

class targetGroups extends Model
{
    /**
     * @var targets[]
     */
    public $targets;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'targets' => 'Targets',
        'URI' => 'URI',
    ];

    public function validate()
    {
        if (\is_array($this->targets)) {
            Model::validateArray($this->targets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targets) {
            if (\is_array($this->targets)) {
                $res['Targets'] = [];
                $n1 = 0;
                foreach ($this->targets as $item1) {
                    $res['Targets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
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
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n1 = 0;
                foreach ($map['Targets'] as $item1) {
                    $model->targets[$n1] = targets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
