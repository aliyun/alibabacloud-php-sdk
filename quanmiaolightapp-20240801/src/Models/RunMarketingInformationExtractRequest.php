<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunMarketingInformationExtractRequest extends Model
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
     * @var string[]
     */
    public $sourceMaterials;
    protected $_name = [
        'customPrompt' => 'customPrompt',
        'extractType' => 'extractType',
        'modelId' => 'modelId',
        'sourceMaterials' => 'sourceMaterials',
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
        if (null !== $this->sourceMaterials) {
            $res['sourceMaterials'] = $this->sourceMaterials;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMarketingInformationExtractRequest
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
            if (!empty($map['sourceMaterials'])) {
                $model->sourceMaterials = $map['sourceMaterials'];
            }
        }

        return $model;
    }
}
