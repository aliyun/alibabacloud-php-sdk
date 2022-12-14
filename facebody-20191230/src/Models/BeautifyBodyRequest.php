<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest\ageRange;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest\bodyBoxes;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest\faceList;
use AlibabaCloud\SDK\Facebody\V20191230\Models\BeautifyBodyRequest\poseList;
use AlibabaCloud\Tea\Model;

class BeautifyBodyRequest extends Model
{
    /**
     * @var ageRange
     */
    public $ageRange;

    /**
     * @example [{\"X\":824,\"Y\":284,\"Height\":670,\"Width\":283},{\"X\":419,\"Y\":291,\"Height\":663,\"Width\":522}]
     *
     * @var bodyBoxes[]
     */
    public $bodyBoxes;

    /**
     * @example 1
     *
     * @var int
     */
    public $custom;

    /**
     * @example [{"age":24,"gender":0,"faceBox":{"x":887,"y":293,"width":81,"height":94}},{"age":24,"gender":0,"faceBox":{"x":695,"y":385,"width":65,"height":75}}]
     *
     * @var faceList[]
     */
    public $faceList;

    /**
     * @example 1
     *
     * @var float
     */
    public $femaleLiquifyDegree;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/jin/BeautifyBody/BeautifyBody1.jpg
     *
     * @var string
     */
    public $imageURL;

    /**
     * @example false
     *
     * @var bool
     */
    public $isPregnant;

    /**
     * @example 1
     *
     * @var float
     */
    public $lengthenDegree;

    /**
     * @example 1
     *
     * @var float
     */
    public $maleLiquifyDegree;

    /**
     * @example 1000
     *
     * @var int
     */
    public $originalHeight;

    /**
     * @example 1500
     *
     * @var int
     */
    public $originalWidth;

    /**
     * @example [{"pose":[{"x":715.33203125,"y":424.31640625,"score":0.8786243796348572},{"x":735.83984375,"y":415.52734375,"score":0.8847978115081787},{"x":703.61328125,"y":410.64453125,"score":0.8813298344612122}]},{"pose":[{"x":926.26953125,"y":342.28515625,"score":0.8721742630004883},{"x":938.96484375,"y":325.68359375,"score":0.8899118900299072},{"x":907.71484375,"y":332.51953125,"score":0.8997631072998047}]}]
     *
     * @var poseList[]
     */
    public $poseList;
    protected $_name = [
        'ageRange'            => 'AgeRange',
        'bodyBoxes'           => 'BodyBoxes',
        'custom'              => 'Custom',
        'faceList'            => 'FaceList',
        'femaleLiquifyDegree' => 'FemaleLiquifyDegree',
        'imageURL'            => 'ImageURL',
        'isPregnant'          => 'IsPregnant',
        'lengthenDegree'      => 'LengthenDegree',
        'maleLiquifyDegree'   => 'MaleLiquifyDegree',
        'originalHeight'      => 'OriginalHeight',
        'originalWidth'       => 'OriginalWidth',
        'poseList'            => 'PoseList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
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
        if (null !== $this->femaleLiquifyDegree) {
            $res['FemaleLiquifyDegree'] = $this->femaleLiquifyDegree;
        }
        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }
        if (null !== $this->isPregnant) {
            $res['IsPregnant'] = $this->isPregnant;
        }
        if (null !== $this->lengthenDegree) {
            $res['LengthenDegree'] = $this->lengthenDegree;
        }
        if (null !== $this->maleLiquifyDegree) {
            $res['MaleLiquifyDegree'] = $this->maleLiquifyDegree;
        }
        if (null !== $this->originalHeight) {
            $res['OriginalHeight'] = $this->originalHeight;
        }
        if (null !== $this->originalWidth) {
            $res['OriginalWidth'] = $this->originalWidth;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BeautifyBodyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
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
        if (isset($map['FemaleLiquifyDegree'])) {
            $model->femaleLiquifyDegree = $map['FemaleLiquifyDegree'];
        }
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['IsPregnant'])) {
            $model->isPregnant = $map['IsPregnant'];
        }
        if (isset($map['LengthenDegree'])) {
            $model->lengthenDegree = $map['LengthenDegree'];
        }
        if (isset($map['MaleLiquifyDegree'])) {
            $model->maleLiquifyDegree = $map['MaleLiquifyDegree'];
        }
        if (isset($map['OriginalHeight'])) {
            $model->originalHeight = $map['OriginalHeight'];
        }
        if (isset($map['OriginalWidth'])) {
            $model->originalWidth = $map['OriginalWidth'];
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

        return $model;
    }
}
