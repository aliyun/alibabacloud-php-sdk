<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ModifySystemPropertyTemplateShrinkRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $enableAuto;

    /**
     * @example https://filepath****.com
     *
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $systemPropertyInfoShrink;

    /**
     * @example ap-angyvganxlf****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'enableAuto' => 'EnableAuto',
        'filePath' => 'FilePath',
        'systemPropertyInfoShrink' => 'SystemPropertyInfo',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableAuto) {
            $res['EnableAuto'] = $this->enableAuto;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->systemPropertyInfoShrink) {
            $res['SystemPropertyInfo'] = $this->systemPropertyInfoShrink;
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
     * @return ModifySystemPropertyTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableAuto'])) {
            $model->enableAuto = $map['EnableAuto'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['SystemPropertyInfo'])) {
            $model->systemPropertyInfoShrink = $map['SystemPropertyInfo'];
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
