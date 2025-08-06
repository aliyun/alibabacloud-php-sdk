<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\messages\content\structView\parts;

class structView extends Model
{
    /**
     * @var parts[]
     */
    public $parts;
    protected $_name = [
        'parts' => 'parts',
    ];

    public function validate()
    {
        if (\is_array($this->parts)) {
            Model::validateArray($this->parts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parts) {
            if (\is_array($this->parts)) {
                $res['parts'] = [];
                $n1 = 0;
                foreach ($this->parts as $item1) {
                    $res['parts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['parts'])) {
            if (!empty($map['parts'])) {
                $model->parts = [];
                $n1 = 0;
                foreach ($map['parts'] as $item1) {
                    $model->parts[$n1] = parts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
