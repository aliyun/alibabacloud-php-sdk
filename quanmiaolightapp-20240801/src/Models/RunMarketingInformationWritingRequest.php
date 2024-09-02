<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunMarketingInformationWritingRequest extends Model
{
    /**
     * @var string
     */
    public $customPrompt;

    /**
     * @example qwen-max
     * qwen-plus
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $sourceMaterial;

    /**
     * @var string
     */
    public $writingType;
    protected $_name = [
        'customPrompt'   => 'customPrompt',
        'modelId'        => 'modelId',
        'sourceMaterial' => 'sourceMaterial',
        'writingType'    => 'writingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customPrompt) {
            $res['customPrompt'] = $this->customPrompt;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->sourceMaterial) {
            $res['sourceMaterial'] = $this->sourceMaterial;
        }
        if (null !== $this->writingType) {
            $res['writingType'] = $this->writingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunMarketingInformationWritingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['customPrompt'])) {
            $model->customPrompt = $map['customPrompt'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['sourceMaterial'])) {
            $model->sourceMaterial = $map['sourceMaterial'];
        }
        if (isset($map['writingType'])) {
            $model->writingType = $map['writingType'];
        }

        return $model;
    }
}
