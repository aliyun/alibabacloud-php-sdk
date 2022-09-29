<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20170622\Models\QueryTemplateByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20170622\Models\QueryTemplateByParamResponseBody\data\template;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->template) {
            $res['template'] = [];
            if (null !== $this->template && \is_array($this->template)) {
                $n = 0;
                foreach ($this->template as $item) {
                    $res['template'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template'])) {
            if (!empty($map['template'])) {
                $model->template = [];
                $n               = 0;
                foreach ($map['template'] as $item) {
                    $model->template[$n++] = null !== $item ? template::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
