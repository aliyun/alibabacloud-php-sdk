<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateLiveTranscodeTemplateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example my template
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @description This parameter is required.
     *
     * @example normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'                 => 'Name',
        'templateConfigShrink' => 'TemplateConfig',
        'type'                 => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateConfigShrink) {
            $res['TemplateConfig'] = $this->templateConfigShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveTranscodeTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfigShrink = $map['TemplateConfig'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
