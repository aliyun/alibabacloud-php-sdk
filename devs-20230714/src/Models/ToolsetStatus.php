<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ToolsetStatus extends Model
{
    /**
     * @var Tool[]
     */
    public $tools;
    protected $_name = [
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                foreach ($this->tools as $key1 => $value1) {
                    $res['tools'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                foreach ($map['tools'] as $key1 => $value1) {
                    $model->tools[$key1] = Tool::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
