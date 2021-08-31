<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest\ageRange;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest\bodyBoxes;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest\faceList;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyAdvanceRequest\poseList;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class BeautifyBodyAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var int
     */
    public $originalWidth;

    /**
     * @var int
     */
    public $originalHeight;

    /**
     * @var int
     */
    public $custom;

    /**
     * @var float
     */
    public $maleLiquifyDegree;

    /**
     * @var float
     */
    public $femaleLiquifyDegree;

    /**
     * @var float
     */
    public $lengthenDegree;

    /**
     * @var ageRange
     */
    public $ageRange;

    /**
     * @var bodyBoxes[]
     */
    public $bodyBoxes;

    /**
     * @var faceList[]
     */
    public $faceList;

    /**
     * @var poseList[]
     */
    public $poseList;

    /**
     * @var bool
     */
    public $isPregnant;
    protected $_name = [
        'imageURLObject'      => 'ImageURLObject',
        'originalWidth'       => 'OriginalWidth',
        'originalHeight'      => 'OriginalHeight',
        'custom'              => 'Custom',
        'maleLiquifyDegree'   => 'MaleLiquifyDegree',
        'femaleLiquifyDegree' => 'FemaleLiquifyDegree',
        'lengthenDegree'      => 'LengthenDegree',
        'ageRange'            => 'AgeRange',
        'bodyBoxes'           => 'BodyBoxes',
        'faceList'            => 'FaceList',
        'poseList'            => 'PoseList',
        'isPregnant'          => 'IsPregnant',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->originalWidth) {
            $res['OriginalWidth'] = $this->originalWidth;
        }
        if (null !== $this->originalHeight) {
            $res['OriginalHeight'] = $this->originalHeight;
        }
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }
        if (null !== $this->maleLiquifyDegree) {
            $res['MaleLiquifyDegree'] = $this->maleLiquifyDegree;
        }
        if (null !== $this->femaleLiquifyDegree) {
            $res['FemaleLiquifyDegree'] = $this->femaleLiquifyDegree;
        }
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }
        if (null !== $this->ageRange) {
            $res['AgeRange'] = null !== $this->ageRange ? $this->ageRange->toMap() : null;
        }
        if (null !== $this->bodyBoxes) {
            $res['BodyBoxes'] = [];
            if (null !== $this->bodyBoxes && \is_array($this->bodyBoxes)) {
                $n = 0;
                foreach ($this->bodyBoxes as $item) {
                    $res['BodyBoxes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->faceList) {
            $res['FaceList'] = [];
            if (null !== $this->faceList && \is_array($this->faceList)) {
                $n = 0;
                foreach ($this->faceList as $item) {
                    $res['FaceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->poseList) {
            $res['PoseList'] = [];
            if (null !== $this->poseList && \is_array($this->poseList)) {
                $n = 0;
                foreach ($this->poseList as $item) {
                    $res['PoseList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isPregnant) {
            $res['IsPregnant'] = $this->isPregnant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeautifyBodyAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['OriginalWidth'])) {
            $model->originalWidth = $map['OriginalWidth'];
        }
        if (isset($map['OriginalHeight'])) {
            $model->originalHeight = $map['OriginalHeight'];
        }
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }
        if (isset($map['MaleLiquifyDegree'])) {
            $model->maleLiquifyDegree = $map['MaleLiquifyDegree'];
        }
        if (isset($map['FemaleLiquifyDegree'])) {
            $model->femaleLiquifyDegree = $map['FemaleLiquifyDegree'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }
        if (isset($map['AgeRange'])) {
            $model->ageRange = ageRange::fromMap($map['AgeRange']);
        }
        if (isset($map['BodyBoxes'])) {
            if (!empty($map['BodyBoxes'])) {
                $model->bodyBoxes = [];
                $n                = 0;
                foreach ($map['BodyBoxes'] as $item) {
                    $model->bodyBoxes[$n++] = null !== $item ? bodyBoxes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FaceList'])) {
            if (!empty($map['FaceList'])) {
                $model->faceList = [];
                $n               = 0;
                foreach ($map['FaceList'] as $item) {
                    $model->faceList[$n++] = null !== $item ? faceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PoseList'])) {
            if (!empty($map['PoseList'])) {
                $model->poseList = [];
                $n               = 0;
                foreach ($map['PoseList'] as $item) {
                    $model->poseList[$n++] = null !== $item ? poseList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsPregnant'])) {
            $model->isPregnant = $map['IsPregnant'];
        }

        return $model;
    }
}
