<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunMarketingInformationExtractShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @var string
     */
    public $extractType;

    /**
     * @example qwen-max
     * qwen-plus
     *
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $sourceMaterialsShrink;
    protected $_name = [
        'customPrompt' => 'customPrompt',
        'extractType' => 'extractType',
        'modelId' => 'modelId',
        'sourceMaterialsShrink' => 'sourceMaterials',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }
        if (null !== $this->extractType) {
            $res['extractType'] = $this->extractType;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->sourceMaterialsShrink) {
            $res['sourceMaterials'] = $this->sourceMaterialsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMarketingInformationExtractShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }
        if (isset($map['extractType'])) {
            $model->extractType = $map['extractType'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['sourceMaterials'])) {
            $model->sourceMaterialsShrink = $map['sourceMaterials'];
        }

        return $model;
    }
}
