<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateComponentIndexRequest\template;

class UpdateComponentIndexRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $meta;

    /**
     * @var template
     */
    public $template;
    protected $_name = [
        'meta' => '_meta',
        'template' => 'template',
    ];

    public function validate()
    {
        if (\is_array($this->meta)) {
            Model::validateArray($this->meta);
        }
        if (null !== $this->template) {
            $this->template->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->meta) {
            if (\is_array($this->meta)) {
                $res['_meta'] = [];
                foreach ($this->meta as $key1 => $value1) {
                    $res['_meta'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->template) {
            $res['template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
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
        if (isset($map['_meta'])) {
            if (!empty($map['_meta'])) {
                $model->meta = [];
                foreach ($map['_meta'] as $key1 => $value1) {
                    $model->meta[$key1] = $value1;
                }
            }
        }

        if (isset($map['template'])) {
            $model->template = template::fromMap($map['template']);
        }

        return $model;
    }
}
