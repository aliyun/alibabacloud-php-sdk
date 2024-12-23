<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\UpdateAndPublishAgentSelectiveRequest\applicationConfig;

use AlibabaCloud\Tea\Model;

class ragConfig extends Model
{
    /**
     * @var string
     */
    public $answerScope;

    /**
     * @var bool
     */
    public $enableCitation;

    /**
     * @var bool
     */
    public $enableSearch;

    /**
     * @var string
     */
    public $enableWebSearch;

    /**
     * @var string
     */
    public $fixedReplyDetail;

    /**
     * @var string[]
     */
    public $knowledgeBaseCodeList;

    /**
     * @var string
     */
    public $promptStrategy;

    /**
     * @var string
     */
    public $ragRejectType;

    /**
     * @var string
     */
    public $rejectFilterPrompt;

    /**
     * @var string
     */
    public $rejectFilterType;

    /**
     * @var int
     */
    public $retrieveMaxLength;

    /**
     * @var int
     */
    public $topK;
    protected $_name = [
        'answerScope'           => 'answerScope',
        'enableCitation'        => 'enableCitation',
        'enableSearch'          => 'enableSearch',
        'enableWebSearch'       => 'enableWebSearch',
        'fixedReplyDetail'      => 'fixedReplyDetail',
        'knowledgeBaseCodeList' => 'knowledgeBaseCodeList',
        'promptStrategy'        => 'promptStrategy',
        'ragRejectType'         => 'ragRejectType',
        'rejectFilterPrompt'    => 'rejectFilterPrompt',
        'rejectFilterType'      => 'rejectFilterType',
        'retrieveMaxLength'     => 'retrieveMaxLength',
        'topK'                  => 'topK',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->answerScope) {
            $res['answerScope'] = $this->answerScope;
        }
        if (null !== $this->enableCitation) {
            $res['enableCitation'] = $this->enableCitation;
        }
        if (null !== $this->enableSearch) {
            $res['enableSearch'] = $this->enableSearch;
        }
        if (null !== $this->enableWebSearch) {
            $res['enableWebSearch'] = $this->enableWebSearch;
        }
        if (null !== $this->fixedReplyDetail) {
            $res['fixedReplyDetail'] = $this->fixedReplyDetail;
        }
        if (null !== $this->knowledgeBaseCodeList) {
            $res['knowledgeBaseCodeList'] = $this->knowledgeBaseCodeList;
        }
        if (null !== $this->promptStrategy) {
            $res['promptStrategy'] = $this->promptStrategy;
        }
        if (null !== $this->ragRejectType) {
            $res['ragRejectType'] = $this->ragRejectType;
        }
        if (null !== $this->rejectFilterPrompt) {
            $res['rejectFilterPrompt'] = $this->rejectFilterPrompt;
        }
        if (null !== $this->rejectFilterType) {
            $res['rejectFilterType'] = $this->rejectFilterType;
        }
        if (null !== $this->retrieveMaxLength) {
            $res['retrieveMaxLength'] = $this->retrieveMaxLength;
        }
        if (null !== $this->topK) {
            $res['topK'] = $this->topK;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ragConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['answerScope'])) {
            $model->answerScope = $map['answerScope'];
        }
        if (isset($map['enableCitation'])) {
            $model->enableCitation = $map['enableCitation'];
        }
        if (isset($map['enableSearch'])) {
            $model->enableSearch = $map['enableSearch'];
        }
        if (isset($map['enableWebSearch'])) {
            $model->enableWebSearch = $map['enableWebSearch'];
        }
        if (isset($map['fixedReplyDetail'])) {
            $model->fixedReplyDetail = $map['fixedReplyDetail'];
        }
        if (isset($map['knowledgeBaseCodeList'])) {
            if (!empty($map['knowledgeBaseCodeList'])) {
                $model->knowledgeBaseCodeList = $map['knowledgeBaseCodeList'];
            }
        }
        if (isset($map['promptStrategy'])) {
            $model->promptStrategy = $map['promptStrategy'];
        }
        if (isset($map['ragRejectType'])) {
            $model->ragRejectType = $map['ragRejectType'];
        }
        if (isset($map['rejectFilterPrompt'])) {
            $model->rejectFilterPrompt = $map['rejectFilterPrompt'];
        }
        if (isset($map['rejectFilterType'])) {
            $model->rejectFilterType = $map['rejectFilterType'];
        }
        if (isset($map['retrieveMaxLength'])) {
            $model->retrieveMaxLength = $map['retrieveMaxLength'];
        }
        if (isset($map['topK'])) {
            $model->topK = $map['topK'];
        }

        return $model;
    }
}
