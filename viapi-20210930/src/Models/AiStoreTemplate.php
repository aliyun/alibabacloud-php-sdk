<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class AiStoreTemplate extends Model
{
    /**
     * @var string
     */
    public $templateContext;

    /**
     * @var string
     */
    public $templateVariable;
    protected $_name = [
        'templateContext'  => 'TemplateContext',
        'templateVariable' => 'TemplateVariable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateContext) {
            $res['TemplateContext'] = $this->templateContext;
        }
        if (null !== $this->templateVariable) {
            $res['TemplateVariable'] = $this->templateVariable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiStoreTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateContext'])) {
            $model->templateContext = $map['TemplateContext'];
        }
        if (isset($map['TemplateVariable'])) {
            $model->templateVariable = $map['TemplateVariable'];
        }

        return $model;
    }
}
