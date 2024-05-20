<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TextTask extends Model
{
    /**
     * @example 九寨沟三日游攻略
     *
     * @var string
     */
    public $contentRequirement;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $nums;

    /**
     * @example xxx
     *
     * @var string
     */
    public $point;

    /**
     * @var ReferenceTag
     */
    public $referenceTag;

    /**
     * @var int
     */
    public $relatedRagId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int[]
     */
    public $textIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $textModeType;

    /**
     * @var int
     */
    public $textTaskId;

    /**
     * @var string
     */
    public $textTaskStatus;

    /**
     * @example 旅游路线
     *
     * @var string
     */
    public $theme;

    /**
     * @var string
     */
    public $themeDesc;
    protected $_name = [
        'contentRequirement' => 'contentRequirement',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'introduction'       => 'introduction',
        'nums'               => 'nums',
        'point'              => 'point',
        'referenceTag'       => 'referenceTag',
        'relatedRagId'       => 'relatedRagId',
        'style'              => 'style',
        'target'             => 'target',
        'textIds'            => 'textIds',
        'textModeType'       => 'textModeType',
        'textTaskId'         => 'textTaskId',
        'textTaskStatus'     => 'textTaskStatus',
        'theme'              => 'theme',
        'themeDesc'          => 'themeDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentRequirement) {
            $res['contentRequirement'] = $this->contentRequirement;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }
        if (null !== $this->nums) {
            $res['nums'] = $this->nums;
        }
        if (null !== $this->point) {
            $res['point'] = $this->point;
        }
        if (null !== $this->referenceTag) {
            $res['referenceTag'] = null !== $this->referenceTag ? $this->referenceTag->toMap() : null;
        }
        if (null !== $this->relatedRagId) {
            $res['relatedRagId'] = $this->relatedRagId;
        }
        if (null !== $this->style) {
            $res['style'] = $this->style;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->textIds) {
            $res['textIds'] = $this->textIds;
        }
        if (null !== $this->textModeType) {
            $res['textModeType'] = $this->textModeType;
        }
        if (null !== $this->textTaskId) {
            $res['textTaskId'] = $this->textTaskId;
        }
        if (null !== $this->textTaskStatus) {
            $res['textTaskStatus'] = $this->textTaskStatus;
        }
        if (null !== $this->theme) {
            $res['theme'] = $this->theme;
        }
        if (null !== $this->themeDesc) {
            $res['themeDesc'] = $this->themeDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contentRequirement'])) {
            $model->contentRequirement = $map['contentRequirement'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['introduction'])) {
            $model->introduction = $map['introduction'];
        }
        if (isset($map['nums'])) {
            $model->nums = $map['nums'];
        }
        if (isset($map['point'])) {
            $model->point = $map['point'];
        }
        if (isset($map['referenceTag'])) {
            $model->referenceTag = ReferenceTag::fromMap($map['referenceTag']);
        }
        if (isset($map['relatedRagId'])) {
            $model->relatedRagId = $map['relatedRagId'];
        }
        if (isset($map['style'])) {
            $model->style = $map['style'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['textIds'])) {
            if (!empty($map['textIds'])) {
                $model->textIds = $map['textIds'];
            }
        }
        if (isset($map['textModeType'])) {
            $model->textModeType = $map['textModeType'];
        }
        if (isset($map['textTaskId'])) {
            $model->textTaskId = $map['textTaskId'];
        }
        if (isset($map['textTaskStatus'])) {
            $model->textTaskStatus = $map['textTaskStatus'];
        }
        if (isset($map['theme'])) {
            $model->theme = $map['theme'];
        }
        if (isset($map['themeDesc'])) {
            $model->themeDesc = $map['themeDesc'];
        }

        return $model;
    }
}
