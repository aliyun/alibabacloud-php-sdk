<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\writingConfig\promptTag;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\writingConfig\tags;

class writingConfig extends Model
{
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string[]
     */
    public $keywords;
    /**
     * @var promptTag
     */
    public $promptTag;
    /**
     * @var string
     */
    public $scene;
    /**
     * @var string
     */
    public $step;
    /**
     * @var string
     */
    public $summaryReturnType;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var bool
     */
    public $useSearch;
    protected $_name = [
        'domain'            => 'Domain',
        'keywords'          => 'Keywords',
        'promptTag'         => 'PromptTag',
        'scene'             => 'Scene',
        'step'              => 'Step',
        'summaryReturnType' => 'SummaryReturnType',
        'tags'              => 'Tags',
        'useSearch'         => 'UseSearch',
    ];

    public function validate()
    {
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        if (null !== $this->promptTag) {
            $this->promptTag->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->keywords) {
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1              = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->promptTag) {
            $res['PromptTag'] = null !== $this->promptTag ? $this->promptTag->toArray($noStream) : $this->promptTag;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }

        if (null !== $this->summaryReturnType) {
            $res['SummaryReturnType'] = $this->summaryReturnType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = [];
                $n1              = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PromptTag'])) {
            $model->promptTag = promptTag::fromMap($map['PromptTag']);
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }

        if (isset($map['SummaryReturnType'])) {
            $model->summaryReturnType = $map['SummaryReturnType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }

        return $model;
    }
}
