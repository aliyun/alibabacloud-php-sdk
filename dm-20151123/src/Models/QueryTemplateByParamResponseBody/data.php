<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryTemplateByParamResponseBody\data\template;

class data extends Model
{
    /**
     * @var template[]
     */
    public $template;
    protected $_name = [
        'template' => 'template',
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
                $res['template'] = [];
                $n1 = 0;
                foreach ($this->template as $item1) {
                    $res['template'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['template'])) {
            if (!empty($map['template'])) {
                $model->template = [];
                $n1 = 0;
                foreach ($map['template'] as $item1) {
                    $model->template[$n1] = template::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
