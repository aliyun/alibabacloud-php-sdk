<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuTemplateResponseBody\templates;

use AlibabaCloud\Tea\Model;

class job extends Model
{
    /**
     * @var string
     */
    public $template;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'template'   => 'Template',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return job
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
