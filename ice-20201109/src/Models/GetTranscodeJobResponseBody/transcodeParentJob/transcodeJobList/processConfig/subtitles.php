<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\transcodeJobList\processConfig\subtitles\overwriteParams;
use AlibabaCloud\Tea\Model;

class subtitles extends Model
{
    /**
     * @description 覆盖参数, 若填写会覆盖模板对应参数
     *
     * @var overwriteParams
     */
    public $overwriteParams;

    /**
     * @description 模板 id
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'overwriteParams' => 'OverwriteParams',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

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
     * @return subtitles
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
