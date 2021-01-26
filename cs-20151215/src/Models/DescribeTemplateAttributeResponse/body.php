<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplateAttributeResponse\body\templateInfo;
use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var templateInfo[]
     */
    public $templateInfo;
    protected $_name = [
        'templateInfo' => 'template_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateInfo) {
            $res['template_info'] = [];
            if (null !== $this->templateInfo && \is_array($this->templateInfo)) {
                $n = 0;
                foreach ($this->templateInfo as $item) {
                    $res['template_info'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template_info'])) {
            if (!empty($map['template_info'])) {
                $model->templateInfo = [];
                $n                   = 0;
                foreach ($map['template_info'] as $item) {
                    $model->templateInfo[$n++] = null !== $item ? templateInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
