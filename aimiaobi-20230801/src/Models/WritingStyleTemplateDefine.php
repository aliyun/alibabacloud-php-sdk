<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateDefine\example;

class WritingStyleTemplateDefine extends Model
{
    /**
     * @var example[]
     */
    public $example;

    /**
     * @var WritingStyleTemplateField[]
     */
    public $fields;
    protected $_name = [
        'example' => 'Example',
        'fields' => 'Fields',
    ];

    public function validate()
    {
        if (\is_array($this->example)) {
            Model::validateArray($this->example);
        }
        if (\is_array($this->fields)) {
            Model::validateArray($this->fields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->example) {
            if (\is_array($this->example)) {
                $res['Example'] = [];
                $n1 = 0;
                foreach ($this->example as $item1) {
                    $res['Example'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fields) {
            if (\is_array($this->fields)) {
                $res['Fields'] = [];
                $n1 = 0;
                foreach ($this->fields as $item1) {
                    $res['Fields'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Example'])) {
            if (!empty($map['Example'])) {
                $model->example = [];
                $n1 = 0;
                foreach ($map['Example'] as $item1) {
                    $model->example[$n1] = example::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n1 = 0;
                foreach ($map['Fields'] as $item1) {
                    $model->fields[$n1] = WritingStyleTemplateField::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
