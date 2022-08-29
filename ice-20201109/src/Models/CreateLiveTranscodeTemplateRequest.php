<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\CreateLiveTranscodeTemplateRequest\templateConfig;
use AlibabaCloud\Tea\Model;

class CreateLiveTranscodeTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var templateConfig
     */
    public $templateConfig;

    /**
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
