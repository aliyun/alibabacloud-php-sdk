<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\MergeImageFaceAdvanceRequest\mergeInfos;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class MergeImageFaceAdvanceRequest extends Model
{
    /**
     * @example False
     *
     * @var bool
     */
    public $addWatermark;

    /**
     * @example http://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/MergeImageFace/MergeImageFace-1.png
     *
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var mergeInfos[]
     */
    public $mergeInfos;

    /**
     * @example v1
     *
     * @var string
     */
    public $modelVersion;

    /**
     * @example 6cd509ea-54fa-4730-8e9d-c94cadcda048
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'addWatermark'   => 'AddWatermark',
        'imageURLObject' => 'ImageURL',
        'mergeInfos'     => 'MergeInfos',
        'modelVersion'   => 'ModelVersion',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addWatermark) {
            $res['AddWatermark'] = $this->addWatermark;
        }
        if (null !== $this->imageURLObject) {
            $res['ImageURL'] = $this->imageURLObject;
        }
        if (null !== $this->mergeInfos) {
            $res['MergeInfos'] = [];
            if (null !== $this->mergeInfos && \is_array($this->mergeInfos)) {
                $n = 0;
                foreach ($this->mergeInfos as $item) {
                    $res['MergeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelVersion) {
            $res['ModelVersion'] = $this->modelVersion;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MergeImageFaceAdvanceRequest
     */
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
                $n                 = 0;
                foreach ($map['MergeInfos'] as $item) {
                    $model->mergeInfos[$n++] = null !== $item ? mergeInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelVersion'])) {
            $model->modelVersion = $map['ModelVersion'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
