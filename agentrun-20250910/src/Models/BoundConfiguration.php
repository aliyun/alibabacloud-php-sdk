<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BoundConfiguration extends Model
{
    /**
     * @var BoundTool[]
     */
    public $boundTools;
    protected $_name = [
        'boundTools' => 'boundTools',
    ];

    public function validate()
    {
        if (\is_array($this->boundTools)) {
            Model::validateArray($this->boundTools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boundTools) {
            if (\is_array($this->boundTools)) {
                $res['boundTools'] = [];
                $n1 = 0;
                foreach ($this->boundTools as $item1) {
                    $res['boundTools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['boundTools'])) {
            if (!empty($map['boundTools'])) {
                $model->boundTools = [];
                $n1 = 0;
                foreach ($map['boundTools'] as $item1) {
                    $model->boundTools[$n1] = BoundTool::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
