<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->sourceMaterials)) {
            Model::validateArray($this->sourceMaterials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->sourceMaterials)) {
                $res['sourceMaterials'] = [];
                $n1 = 0;
                foreach ($this->sourceMaterials as $item1) {
                    $res['sourceMaterials'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->sourceMaterials = [];
                $n1 = 0;
                foreach ($map['sourceMaterials'] as $item1) {
                    $model->sourceMaterials[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
