<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunWritingV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $articlesShrink;

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
     * @var string
     */
    public $keywordsShrink;

    /**
     * @example en
     *
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $miniDocsShrink;

    /**
     * @var string
     */
    public $outlinesShrink;

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
     * @var string
     */
    public $searchSourcesShrink;

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
     * @var string
     */
    public $summarizationShrink;

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
     * @var string
     */
    public $writingParamsShrink;

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
        'articlesShrink' => 'Articles',
        'distributeWriting' => 'DistributeWriting',
        'gcNumberSize' => 'GcNumberSize',
        'gcNumberSizeTag' => 'GcNumberSizeTag',
        'keywordsShrink' => 'Keywords',
        'language' => 'Language',
        'miniDocsShrink' => 'MiniDocs',
        'outlinesShrink' => 'Outlines',
        'prompt' => 'Prompt',
        'promptMode' => 'PromptMode',
        'searchSourcesShrink' => 'SearchSources',
        'sessionId' => 'SessionId',
        'step' => 'Step',
        'summarizationShrink' => 'Summarization',
        'taskId' => 'TaskId',
        'useSearch' => 'UseSearch',
        'workspaceId' => 'WorkspaceId',
        'writingParamsShrink' => 'WritingParams',
        'writingScene' => 'WritingScene',
        'writingStyle' => 'WritingStyle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->articlesShrink) {
            $res['Articles'] = $this->articlesShrink;
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
        if (null !== $this->keywordsShrink) {
            $res['Keywords'] = $this->keywordsShrink;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->miniDocsShrink) {
            $res['MiniDocs'] = $this->miniDocsShrink;
        }
        if (null !== $this->outlinesShrink) {
            $res['Outlines'] = $this->outlinesShrink;
        }
        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }
        if (null !== $this->promptMode) {
            $res['PromptMode'] = $this->promptMode;
        }
        if (null !== $this->searchSourcesShrink) {
            $res['SearchSources'] = $this->searchSourcesShrink;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->summarizationShrink) {
            $res['Summarization'] = $this->summarizationShrink;
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
        if (null !== $this->writingParamsShrink) {
            $res['WritingParams'] = $this->writingParamsShrink;
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
     * @return RunWritingV2ShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Articles'])) {
            $model->articlesShrink = $map['Articles'];
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
            $model->keywordsShrink = $map['Keywords'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['MiniDocs'])) {
            $model->miniDocsShrink = $map['MiniDocs'];
        }
        if (isset($map['Outlines'])) {
            $model->outlinesShrink = $map['Outlines'];
        }
        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }
        if (isset($map['PromptMode'])) {
            $model->promptMode = $map['PromptMode'];
        }
        if (isset($map['SearchSources'])) {
            $model->searchSourcesShrink = $map['SearchSources'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Summarization'])) {
            $model->summarizationShrink = $map['Summarization'];
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
            $model->writingParamsShrink = $map['WritingParams'];
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
