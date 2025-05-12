<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\articles;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\miniDocs;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\outlines;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\searchSources;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunWritingV2Request\summarization;

class RunWritingV2Request extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var bool
     */
    public $distributeWriting;

    /**
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
     * @var string
     */
    public $promptMode;

    /**
     * @var searchSources[]
     */
    public $searchSources;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $step;

    /**
     * @var summarization[]
     */
    public $summarization;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var bool
     */
    public $useSearch;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string[]
     */
    public $writingParams;

    /**
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

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->keywords)) {
            Model::validateArray($this->keywords);
        }
        if (\is_array($this->miniDocs)) {
            Model::validateArray($this->miniDocs);
        }
        if (\is_array($this->outlines)) {
            Model::validateArray($this->outlines);
        }
        if (\is_array($this->searchSources)) {
            Model::validateArray($this->searchSources);
        }
        if (\is_array($this->summarization)) {
            Model::validateArray($this->summarization);
        }
        if (\is_array($this->writingParams)) {
            Model::validateArray($this->writingParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['Articles'] = [];
                $n1 = 0;
                foreach ($this->articles as $item1) {
                    $res['Articles'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->keywords)) {
                $res['Keywords'] = [];
                $n1 = 0;
                foreach ($this->keywords as $item1) {
                    $res['Keywords'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->miniDocs) {
            if (\is_array($this->miniDocs)) {
                $res['MiniDocs'] = [];
                $n1 = 0;
                foreach ($this->miniDocs as $item1) {
                    $res['MiniDocs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outlines) {
            if (\is_array($this->outlines)) {
                $res['Outlines'] = [];
                $n1 = 0;
                foreach ($this->outlines as $item1) {
                    $res['Outlines'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->searchSources)) {
                $res['SearchSources'] = [];
                $n1 = 0;
                foreach ($this->searchSources as $item1) {
                    $res['SearchSources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->summarization)) {
                $res['Summarization'] = [];
                $n1 = 0;
                foreach ($this->summarization as $item1) {
                    $res['Summarization'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->writingParams)) {
                $res['WritingParams'] = [];
                foreach ($this->writingParams as $key1 => $value1) {
                    $res['WritingParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->writingScene) {
            $res['WritingScene'] = $this->writingScene;
        }

        if (null !== $this->writingStyle) {
            $res['WritingStyle'] = $this->writingStyle;
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
        if (isset($map['Articles'])) {
            if (!empty($map['Articles'])) {
                $model->articles = [];
                $n1 = 0;
                foreach ($map['Articles'] as $item1) {
                    $model->articles[$n1++] = articles::fromMap($item1);
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
                $model->keywords = [];
                $n1 = 0;
                foreach ($map['Keywords'] as $item1) {
                    $model->keywords[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['MiniDocs'])) {
            if (!empty($map['MiniDocs'])) {
                $model->miniDocs = [];
                $n1 = 0;
                foreach ($map['MiniDocs'] as $item1) {
                    $model->miniDocs[$n1++] = miniDocs::fromMap($item1);
                }
            }
        }

        if (isset($map['Outlines'])) {
            if (!empty($map['Outlines'])) {
                $model->outlines = [];
                $n1 = 0;
                foreach ($map['Outlines'] as $item1) {
                    $model->outlines[$n1++] = outlines::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['SearchSources'] as $item1) {
                    $model->searchSources[$n1++] = searchSources::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['Summarization'] as $item1) {
                    $model->summarization[$n1++] = summarization::fromMap($item1);
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
            if (!empty($map['WritingParams'])) {
                $model->writingParams = [];
                foreach ($map['WritingParams'] as $key1 => $value1) {
                    $model->writingParams[$key1] = $value1;
                }
            }
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
