<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListEdgeTranscodeTemplateResponseBody\templateList\template;

class templateList extends Model
{
    /**
     * @var template[]
     */
    public $template;
    protected $_name = [
        'template' => 'Template',
    ];

    public function validate()
    {
        if (\is_array($this->template)) {
            Model::validateArray($this->template);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->template) {
            if (\is_array($this->template)) {
                $res['Template'] = [];
                $n1 = 0;
                foreach ($this->template as $item1) {
                    $res['Template'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Template'])) {
            if (!empty($map['Template'])) {
                $model->template = [];
                $n1 = 0;
                foreach ($map['Template'] as $item1) {
                    $model->template[$n1] = template::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
