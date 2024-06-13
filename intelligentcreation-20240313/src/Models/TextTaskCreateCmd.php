<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TextTaskCreateCmd extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @example 极氪007新车上市
     *
     * @var string
     */
    public $contentRequirement;

    /**
     * @example 28274623764834
     *
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $industry;

    /**
     * @example xxx
     *
     * @var string
     */
    public $introduction;

    /**
     * @description This parameter is required.
     *
     * @example 4
     *
     * @var int
     */
    public $number;

    /**
     * @example 超强续航
     *
     * @var string
     */
    public $point;

    /**
     * @var ReferenceTag
     */
    public $referenceTag;

    /**
     * @example 1
     *
     * @var int[]
     */
    public $relatedRagIds;

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
     * @description This parameter is required.
     *
     * @var string
     */
    public $textModeType;

    /**
     * @example 旅游路线
     *
     * @var string
     */
    public $theme;

    /**
     * @var string[]
     */
    public $themes;
    protected $_name = [
        'agentId'            => 'agentId',
        'contentRequirement' => 'contentRequirement',
        'idempotentId'       => 'idempotentId',
        'industry'           => 'industry',
        'introduction'       => 'introduction',
        'number'             => 'number',
        'point'              => 'point',
        'referenceTag'       => 'referenceTag',
        'relatedRagIds'      => 'relatedRagIds',
        'style'              => 'style',
        'target'             => 'target',
        'textModeType'       => 'textModeType',
        'theme'              => 'theme',
        'themes'             => 'themes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->contentRequirement) {
            $res['contentRequirement'] = $this->contentRequirement;
        }
        if (null !== $this->idempotentId) {
            $res['idempotentId'] = $this->idempotentId;
        }
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }
        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }
        if (null !== $this->number) {
            $res['number'] = $this->number;
        }
        if (null !== $this->point) {
            $res['point'] = $this->point;
        }
        if (null !== $this->referenceTag) {
            $res['referenceTag'] = null !== $this->referenceTag ? $this->referenceTag->toMap() : null;
        }
        if (null !== $this->relatedRagIds) {
            $res['relatedRagIds'] = $this->relatedRagIds;
        }
        if (null !== $this->style) {
            $res['style'] = $this->style;
        }
        if (null !== $this->target) {
            $res['target'] = $this->target;
        }
        if (null !== $this->textModeType) {
            $res['textModeType'] = $this->textModeType;
        }
        if (null !== $this->theme) {
            $res['theme'] = $this->theme;
        }
        if (null !== $this->themes) {
            $res['themes'] = $this->themes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextTaskCreateCmd
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['contentRequirement'])) {
            $model->contentRequirement = $map['contentRequirement'];
        }
        if (isset($map['idempotentId'])) {
            $model->idempotentId = $map['idempotentId'];
        }
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }
        if (isset($map['introduction'])) {
            $model->introduction = $map['introduction'];
        }
        if (isset($map['number'])) {
            $model->number = $map['number'];
        }
        if (isset($map['point'])) {
            $model->point = $map['point'];
        }
        if (isset($map['referenceTag'])) {
            $model->referenceTag = ReferenceTag::fromMap($map['referenceTag']);
        }
        if (isset($map['relatedRagIds'])) {
            if (!empty($map['relatedRagIds'])) {
                $model->relatedRagIds = $map['relatedRagIds'];
            }
        }
        if (isset($map['style'])) {
            $model->style = $map['style'];
        }
        if (isset($map['target'])) {
            $model->target = $map['target'];
        }
        if (isset($map['textModeType'])) {
            $model->textModeType = $map['textModeType'];
        }
        if (isset($map['theme'])) {
            $model->theme = $map['theme'];
        }
        if (isset($map['themes'])) {
            if (!empty($map['themes'])) {
                $model->themes = $map['themes'];
            }
        }

        return $model;
    }
}
