<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\WritingStyleTemplateDefine\example;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->example) {
            $res['Example'] = [];
            if (null !== $this->example && \is_array($this->example)) {
                $n = 0;
                foreach ($this->example as $item) {
                    $res['Example'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fields) {
            $res['Fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['Fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WritingStyleTemplateDefine
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Example'])) {
            if (!empty($map['Example'])) {
                $model->example = [];
                $n = 0;
                foreach ($map['Example'] as $item) {
                    $model->example[$n++] = null !== $item ? example::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = [];
                $n = 0;
                foreach ($map['Fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? WritingStyleTemplateField::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
