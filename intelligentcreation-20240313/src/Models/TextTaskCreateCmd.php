<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TextTaskCreateCmd extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $contentRequirement;

    /**
     * @var string
     */
    public $idempotentId;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var int
     */
    public $number;

    /**
     * @var string
     */
    public $point;

    /**
     * @var ReferenceTag
     */
    public $referenceTag;

    /**
     * @var int[]
     */
    public $relatedRagIds;

    /**
     * @var bool
     */
    public $streamApi;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $target;

    /**
     * @var string
     */
    public $textModeType;

    /**
     * @var string
     */
    public $theme;

    /**
     * @var string[]
     */
    public $themes;
    protected $_name = [
        'agentId' => 'agentId',
        'contentRequirement' => 'contentRequirement',
        'idempotentId' => 'idempotentId',
        'industry' => 'industry',
        'introduction' => 'introduction',
        'number' => 'number',
        'point' => 'point',
        'referenceTag' => 'referenceTag',
        'relatedRagIds' => 'relatedRagIds',
        'streamApi' => 'streamApi',
        'style' => 'style',
        'target' => 'target',
        'textModeType' => 'textModeType',
        'theme' => 'theme',
        'themes' => 'themes',
    ];

    public function validate()
    {
        if (null !== $this->referenceTag) {
            $this->referenceTag->validate();
        }
        if (\is_array($this->relatedRagIds)) {
            Model::validateArray($this->relatedRagIds);
        }
        if (\is_array($this->themes)) {
            Model::validateArray($this->themes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['referenceTag'] = null !== $this->referenceTag ? $this->referenceTag->toArray($noStream) : $this->referenceTag;
        }

        if (null !== $this->relatedRagIds) {
            if (\is_array($this->relatedRagIds)) {
                $res['relatedRagIds'] = [];
                $n1 = 0;
                foreach ($this->relatedRagIds as $item1) {
                    $res['relatedRagIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->streamApi) {
            $res['streamApi'] = $this->streamApi;
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
            if (\is_array($this->themes)) {
                $res['themes'] = [];
                $n1 = 0;
                foreach ($this->themes as $item1) {
                    $res['themes'][$n1++] = $item1;
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
                $model->relatedRagIds = [];
                $n1 = 0;
                foreach ($map['relatedRagIds'] as $item1) {
                    $model->relatedRagIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['streamApi'])) {
            $model->streamApi = $map['streamApi'];
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
                $model->themes = [];
                $n1 = 0;
                foreach ($map['themes'] as $item1) {
                    $model->themes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
