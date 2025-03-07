<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest\templateConfig;
use AlibabaCloud\Tea\Model;

class CreateLiveTranscodeTemplateRequest extends Model
{
    /**
     * @description The name of the template.
     *
     * This parameter is required.
     * @example my template
     *
     * @var string
     */
    public $name;

    /**
     * @description The configuration of the template.
     *
     * @var templateConfig
     */
    public $templateConfig;

    /**
     * @description The type of the template. Valid values:
     *
     *   normal
     *   narrow-band
     *   audio-only
     *   origin
     *
     * This parameter is required.
     * @example normal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'           => 'Name',
        'templateConfig' => 'TemplateConfig',
        'type'           => 'Type',
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
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = null !== $this->templateConfig ? $this->templateConfig->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLiveTranscodeTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = templateConfig::fromMap($map['TemplateConfig']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
