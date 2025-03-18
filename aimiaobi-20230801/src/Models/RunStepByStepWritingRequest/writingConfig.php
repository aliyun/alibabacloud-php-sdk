<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\writingConfig\promptTag;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunStepByStepWritingRequest\writingConfig\tags;
use AlibabaCloud\Tea\Model;

class writingConfig extends Model
{
    /**
     * @example media
     *
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
     * @example 分步骤写作场景，传媒写作支持的写作场景:新闻写作(默认),新闻评论,通用文体，公文写作支持的写作场景:通知(默认),通告,通报,请示,决定,函,通用文体
     *
     * @var string
     */
    public $scene;

    /**
     * @example Writing
     *
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
     * @example true
     *
     * @var bool
     */
    public $useSearch;
    protected $_name = [
        'domain' => 'Domain',
        'keywords' => 'Keywords',
        'promptTag' => 'PromptTag',
        'scene' => 'Scene',
        'step' => 'Step',
        'summaryReturnType' => 'SummaryReturnType',
        'tags' => 'Tags',
        'useSearch' => 'UseSearch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->promptTag) {
            $res['PromptTag'] = null !== $this->promptTag ? $this->promptTag->toMap() : null;
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
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return writingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
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
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }

        return $model;
    }
}
