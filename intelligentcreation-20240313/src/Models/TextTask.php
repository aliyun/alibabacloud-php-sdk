<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class TextTask extends Model
{
    /**
     * @var string
     */
    public $agentId;
    /**
     * @var string
     */
    public $agentName;
    /**
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
     * @var int
     */
    public $nums;
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
     * @var Text[]
     */
    public $texts;
    /**
     * @var string
     */
    public $theme;
    /**
     * @var string
     */
    public $themeDesc;
    protected $_name = [
        'agentId'            => 'agentId',
        'agentName'          => 'agentName',
        'contentRequirement' => 'contentRequirement',
        'gmtCreate'          => 'gmtCreate',
        'gmtModified'        => 'gmtModified',
        'introduction'       => 'introduction',
        'nums'               => 'nums',
        'point'              => 'point',
        'referenceTag'       => 'referenceTag',
        'relatedRagIds'      => 'relatedRagIds',
        'style'              => 'style',
        'target'             => 'target',
        'textIds'            => 'textIds',
        'textModeType'       => 'textModeType',
        'textTaskId'         => 'textTaskId',
        'textTaskStatus'     => 'textTaskStatus',
        'texts'              => 'texts',
        'theme'              => 'theme',
        'themeDesc'          => 'themeDesc',
    ];

    public function validate()
    {
        if (null !== $this->referenceTag) {
            $this->referenceTag->validate();
        }
        if (\is_array($this->relatedRagIds)) {
            Model::validateArray($this->relatedRagIds);
        }
        if (\is_array($this->textIds)) {
            Model::validateArray($this->textIds);
        }
        if (\is_array($this->texts)) {
            Model::validateArray($this->texts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['agentName'] = $this->agentName;
        }

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
            $res['referenceTag'] = null !== $this->referenceTag ? $this->referenceTag->toArray($noStream) : $this->referenceTag;
        }

        if (null !== $this->relatedRagIds) {
            if (\is_array($this->relatedRagIds)) {
                $res['relatedRagIds'] = [];
                $n1                   = 0;
                foreach ($this->relatedRagIds as $item1) {
                    $res['relatedRagIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->style) {
            $res['style'] = $this->style;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
        }

        if (null !== $this->textIds) {
            if (\is_array($this->textIds)) {
                $res['textIds'] = [];
                $n1             = 0;
                foreach ($this->textIds as $item1) {
                    $res['textIds'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->texts) {
            if (\is_array($this->texts)) {
                $res['texts'] = [];
                $n1           = 0;
                foreach ($this->texts as $item1) {
                    $res['texts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->theme) {
            $res['theme'] = $this->theme;
        }

        if (null !== $this->themeDesc) {
            $res['themeDesc'] = $this->themeDesc;
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

        if (isset($map['agentName'])) {
            $model->agentName = $map['agentName'];
        }

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

        if (isset($map['relatedRagIds'])) {
            if (!empty($map['relatedRagIds'])) {
                $model->relatedRagIds = [];
                $n1                   = 0;
                foreach ($map['relatedRagIds'] as $item1) {
                    $model->relatedRagIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        if (isset($map['textIds'])) {
            if (!empty($map['textIds'])) {
                $model->textIds = [];
                $n1             = 0;
                foreach ($map['textIds'] as $item1) {
                    $model->textIds[$n1++] = $item1;
                }
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

        if (isset($map['texts'])) {
            if (!empty($map['texts'])) {
                $model->texts = [];
                $n1           = 0;
                foreach ($map['texts'] as $item1) {
                    $model->texts[$n1++] = Text::fromMap($item1);
                }
            }
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
