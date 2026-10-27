<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\PreviewNotifyTemplateRequest\templates;

class PreviewNotifyTemplateRequest extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'data' => 'data',
        'templates' => 'templates',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['templates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['templates'] as $item1) {
                    $model->templates[$n1] = templates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
