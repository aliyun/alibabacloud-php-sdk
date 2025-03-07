<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveTranscodeTemplateShrinkRequest extends Model
{
    /**
     * @description The template name.
     *
     * @var string
     */
    public $name;

    /**
     * @description The configuration of the template.
     *
     * @var string
     */
    public $templateConfigShrink;

    /**
     * @description The template ID. To obtain the template ID, log on to the [Intelligent Media Services (IMS) console](https://ims.console.aliyun.com/summary), choose Real-time Media Processing > Template Management, and then click the Transcoding tab. Alternatively, find the ID from the response parameters of the [CreateLiveTranscodeTemplate](https://help.aliyun.com/document_detail/449217.html) operation.
     *
     * This parameter is required.
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'                 => 'Name',
        'templateConfigShrink' => 'TemplateConfig',
        'templateId'           => 'TemplateId',
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
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveTranscodeTemplateShrinkRequest
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
