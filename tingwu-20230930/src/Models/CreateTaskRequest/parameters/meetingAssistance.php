<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters;

use AlibabaCloud\Dara\Model;

class meetingAssistance extends Model
{
    /**
     * @var string[]
     */
    public $types;
    protected $_name = [
        'types' => 'Types',
    ];

    public function validate()
    {
        if (\is_array($this->types)) {
            Model::validateArray($this->types);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->types) {
            if (\is_array($this->types)) {
                $res['Types'] = [];
                $n1           = 0;
                foreach ($this->types as $item1) {
                    $res['Types'][$n1++] = $item1;
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
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = [];
                $n1           = 0;
                foreach ($map['Types'] as $item1) {
                    $model->types[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
