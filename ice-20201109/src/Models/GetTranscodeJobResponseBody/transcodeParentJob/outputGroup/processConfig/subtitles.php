<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\subtitles\overwriteParams;

class subtitles extends Model
{
    /**
     * @var overwriteParams
     */
    public $overwriteParams;
    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'overwriteParams' => 'OverwriteParams',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->overwriteParams) {
            $this->overwriteParams->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overwriteParams) {
            $res['OverwriteParams'] = null !== $this->overwriteParams ? $this->overwriteParams->toArray($noStream) : $this->overwriteParams;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['OverwriteParams'])) {
            $model->overwriteParams = overwriteParams::fromMap($map['OverwriteParams']);
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
