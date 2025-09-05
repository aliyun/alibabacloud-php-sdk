<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceAdvanceRequest\mergeInfos;
use GuzzleHttp\Psr7\Stream;

class MergeImageFaceAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $addWatermark;

    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var mergeInfos[]
     */
    public $mergeInfos;

    /**
     * @var string
     */
    public $modelVersion;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $watermarkType;
    protected $_name = [
        'addWatermark' => 'AddWatermark',
        'imageURLObject' => 'ImageURL',
        'mergeInfos' => 'MergeInfos',
        'modelVersion' => 'ModelVersion',
        'templateId' => 'TemplateId',
        'watermarkType' => 'WatermarkType',
    ];

    public function validate()
    {
        if (\is_array($this->mergeInfos)) {
            Model::validateArray($this->mergeInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addWatermark) {
            $res['AddWatermark'] = $this->addWatermark;
        }

        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }

        if (null !== $this->mergeInfos) {
            if (\is_array($this->mergeInfos)) {
                $res['MergeInfos'] = [];
                $n1 = 0;
                foreach ($this->mergeInfos as $item1) {
                    $res['MergeInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->watermarkType) {
            $res['WatermarkType'] = $this->watermarkType;
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
        if (isset($map['AddWatermark'])) {
            $model->addWatermark = $map['AddWatermark'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURLObject = $map['ImageURL'];
        }

        if (isset($map['MergeInfos'])) {
            if (!empty($map['MergeInfos'])) {
                $model->mergeInfos = [];
                $n1 = 0;
                foreach ($map['MergeInfos'] as $item1) {
                    $model->mergeInfos[$n1] = mergeInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
