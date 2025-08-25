<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videoenhan\V20200320\Models\MergeVideoModelFaceAdvanceRequest\mergeInfos;
use GuzzleHttp\Psr7\Stream;

class MergeVideoModelFaceAdvanceRequest extends Model
{
    /**
     * @var bool
     */
    public $addWatermark;

    /**
     * @var bool
     */
    public $enhance;

    /**
     * @var Stream
     */
    public $faceImageURLObject;

    /**
     * @var mergeInfos[]
     */
    public $mergeInfos;

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
        'enhance' => 'Enhance',
        'faceImageURLObject' => 'FaceImageURL',
        'mergeInfos' => 'MergeInfos',
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

        if (null !== $this->enhance) {
            $res['Enhance'] = $this->enhance;
        }

        if (null !== $this->faceImageURLObject) {
            $res['FaceImageURL'] = $this->faceImageURLObject;
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

        if (isset($map['Enhance'])) {
            $model->enhance = $map['Enhance'];
        }

        if (isset($map['FaceImageURL'])) {
            $model->faceImageURLObject = $map['FaceImageURL'];
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

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['WatermarkType'])) {
            $model->watermarkType = $map['WatermarkType'];
        }

        return $model;
    }
}
