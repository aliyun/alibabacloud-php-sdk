<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class CreateSystemPropertyTemplateShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $enableAuto;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $systemPropertyInfoShrink;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'enableAuto' => 'EnableAuto',
        'filePath' => 'FilePath',
        'systemPropertyInfoShrink' => 'SystemPropertyInfo',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['EnableAuto'])) {
            $model->enableAuto = $map['EnableAuto'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['SystemPropertyInfo'])) {
            $model->systemPropertyInfoShrink = $map['SystemPropertyInfo'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
