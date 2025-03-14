<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\imageWatermarks\overwriteParams;
use AlibabaCloud\Tea\Model;

class imageWatermarks extends Model
{
    /**
     * @description The parameters that are used to overwrite the corresponding parameters of the template.
     *
     * @var overwriteParams
     */
    public $overwriteParams;

    /**
     * @description The template ID.
     *
     * @example 9547c6ad97cb4f2aaa29683ebd18d410
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'overwriteParams' => 'OverwriteParams',
        'templateId' => 'TemplateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->overwriteParams) {
            $res['OverwriteParams'] = null !== $this->overwriteParams ? $this->overwriteParams->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageWatermarks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverwriteParams'])) {
            $model->overwriteParams = overwriteParams::fromMap($map['OverwriteParams']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
