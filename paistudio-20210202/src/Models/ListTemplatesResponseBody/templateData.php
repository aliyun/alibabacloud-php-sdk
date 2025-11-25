<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\template;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\templateTag;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\templateType;

class templateData extends Model
{
    /**
     * @var template
     */
    public $template;

    /**
     * @var templateTag
     */
    public $templateTag;

    /**
     * @var templateType
     */
    public $templateType;
    protected $_name = [
        'template' => 'Template',
        'templateTag' => 'TemplateTag',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
        if (null !== $this->template) {
            $this->template->validate();
        }
        if (null !== $this->templateTag) {
            $this->templateTag->validate();
        }
        if (null !== $this->templateType) {
            $this->templateType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toArray($noStream) : $this->template;
        }

        if (null !== $this->templateTag) {
            $res['TemplateTag'] = null !== $this->templateTag ? $this->templateTag->toArray($noStream) : $this->templateTag;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = null !== $this->templateType ? $this->templateType->toArray($noStream) : $this->templateType;
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
            $model->template = template::fromMap($map['Template']);
        }

        if (isset($map['TemplateTag'])) {
            $model->templateTag = templateTag::fromMap($map['TemplateTag']);
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = templateType::fromMap($map['TemplateType']);
        }

        return $model;
    }
}
