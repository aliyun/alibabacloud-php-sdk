<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\miniDocs;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\outlines;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\searchSources;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\summarization;
use AlibabaCloud\Tea\Model;

class RunWritingV2Request extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @example false
     *
     * @var bool
     */
    public $distributeWriting;

    /**
     * @example 2
     *
     * @var int
     */
    public $gcNumberSize;

    /**
     * @var string
     */
    public $gcNumberSizeTag;

    /**
     * @var string[]
     */
    public $keywords;

    /**
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @var miniDocs[]
     */
    public $miniDocs;

    /**
     * @var outlines[]
     */
    public $outlines;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @example Template
     *
     * @var string
     */
    public $promptMode;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example Writing
     *
     * @var string
     */
    public $step;

    /**
     * @var summarization[]
     */
    public $summarization;

    /**
     * @example 3f7045e099474ba28ceca1b4eb6d6e21
     *
     * @var string
     */
    public $taskId;

    /**
     * @example true
     *
     * @var bool
     */
    public $useSearch;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @var string[]
     */
    public $writingParams;

    /**
     * @example media
     *
     * @var string
     */
    public $writingScene;

    /**
     * @var string
     */
    public $writingStyle;
    protected $_name = [
        'articles' => 'Articles',
        'distributeWriting' => 'DistributeWriting',
        'gcNumberSize' => 'GcNumberSize',
        'gcNumberSizeTag' => 'GcNumberSizeTag',
        'keywords' => 'Keywords',
        'language' => 'Language',
        'miniDocs' => 'MiniDocs',
        'outlines' => 'Outlines',
        'prompt' => 'Prompt',
        'promptMode' => 'PromptMode',
        'searchSources' => 'SearchSources',
        'sessionId' => 'SessionId',
        'step' => 'Step',
        'summarization' => 'Summarization',
        'taskId' => 'TaskId',
        'useSearch' => 'UseSearch',
        'workspaceId' => 'WorkspaceId',
        'writingParams' => 'WritingParams',
        'writingScene' => 'WritingScene',
        'writingStyle' => 'WritingStyle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['Articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['Articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->distributeWriting) {
            $res['DistributeWriting'] = $this->distributeWriting;
        }
        if (null !== $this->gcNumberSize) {
            $res['GcNumberSize'] = $this->gcNumberSize;
        }
        if (null !== $this->gcNumberSizeTag) {
            $res['GcNumberSizeTag'] = $this->gcNumberSizeTag;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->miniDocs) {
            $res['MiniDocs'] = [];
            if (null !== $this->miniDocs && \is_array($this->miniDocs)) {
                $n = 0;
                foreach ($this->miniDocs as $item) {
                    $res['MiniDocs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outlines) {
            $res['Outlines'] = [];
            if (null !== $this->outlines && \is_array($this->outlines)) {
                $n = 0;
                foreach ($this->outlines as $item) {
                    $res['Outlines'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->promptMode) {
            $res['PromptMode'] = $this->promptMode;
        }
        if (null !== $this->searchSources) {
            $res['SearchSources'] = [];
            if (null !== $this->searchSources && \is_array($this->searchSources)) {
                $n = 0;
                foreach ($this->searchSources as $item) {
                    $res['SearchSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->summarization) {
            $res['Summarization'] = [];
            if (null !== $this->summarization && \is_array($this->summarization)) {
                $n = 0;
                foreach ($this->summarization as $item) {
                    $res['Summarization'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->useSearch) {
            $res['UseSearch'] = $this->useSearch;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->writingParams) {
            $res['WritingParams'] = $this->writingParams;
        }
        if (null !== $this->writingScene) {
            $res['WritingScene'] = $this->writingScene;
        }
        if (null !== $this->writingStyle) {
            $res['WritingStyle'] = $this->writingStyle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunWritingV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n = 0;
                foreach ($map['Articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DistributeWriting'])) {
            $model->distributeWriting = $map['DistributeWriting'];
        }
        if (isset($map['GcNumberSize'])) {
            $model->gcNumberSize = $map['GcNumberSize'];
        }
        if (isset($map['GcNumberSizeTag'])) {
            $model->gcNumberSizeTag = $map['GcNumberSizeTag'];
        }
        if (isset($map['Keywords'])) {
            if (!empty($map['Keywords'])) {
                $model->keywords = $map['Keywords'];
            }
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MiniDocs'])) {
            if (!empty($map['MiniDocs'])) {
                $model->miniDocs = [];
                $n = 0;
                foreach ($map['MiniDocs'] as $item) {
                    $model->miniDocs[$n++] = null !== $item ? miniDocs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n = 0;
                foreach ($map['Outlines'] as $item) {
                    $model->outlines[$n++] = null !== $item ? outlines::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['PromptMode'])) {
            $model->promptMode = $map['PromptMode'];
        }
        if (isset($map['SearchSources'])) {
            if (!empty($map['SearchSources'])) {
                $model->searchSources = [];
                $n = 0;
                foreach ($map['SearchSources'] as $item) {
                    $model->searchSources[$n++] = null !== $item ? searchSources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Summarization'])) {
            if (!empty($map['Summarization'])) {
                $model->summarization = [];
                $n = 0;
                foreach ($map['Summarization'] as $item) {
                    $model->summarization[$n++] = null !== $item ? summarization::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['UseSearch'])) {
            $model->useSearch = $map['UseSearch'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }
        if (isset($map['WritingParams'])) {
            $model->writingParams = $map['WritingParams'];
        }
        if (isset($map['WritingScene'])) {
            $model->writingScene = $map['WritingScene'];
        }
        if (isset($map['WritingStyle'])) {
            $model->writingStyle = $map['WritingStyle'];
        }

        return $model;
    }
}
