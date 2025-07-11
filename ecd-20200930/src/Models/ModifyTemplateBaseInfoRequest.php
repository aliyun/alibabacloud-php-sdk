<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyTemplateBaseInfoRequest extends Model
{
    /**
     * @description The template description.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The template ID.
     *
     * This parameter is required.
     *
     * @example b-0caoeogs88y*****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template name.
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'description' => 'Description',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTemplateBaseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
