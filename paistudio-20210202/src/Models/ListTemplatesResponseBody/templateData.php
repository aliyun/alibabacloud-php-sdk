<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody;

use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\template;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\templateTag;
use AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData\templateType;
use AlibabaCloud\Tea\Model;

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
        'template'     => 'Template',
        'templateTag'  => 'TemplateTag',
        'templateType' => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->template) {
            $res['Template'] = null !== $this->template ? $this->template->toMap() : null;
        }
        if (null !== $this->templateTag) {
            $res['TemplateTag'] = null !== $this->templateTag ? $this->templateTag->toMap() : null;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = null !== $this->templateType ? $this->templateType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateData
     */
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
