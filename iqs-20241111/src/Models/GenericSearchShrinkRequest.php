<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class GenericSearchShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $advancedParamsShrink;

    /**
     * @var bool
     */
    public $enableRerank;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $query;

    /**
     * @var bool
     */
    public $returnMainText;

    /**
     * @var bool
     */
    public $returnMarkdownText;

    /**
     * @var bool
     */
    public $returnRichMainBody;

    /**
     * @var bool
     */
    public $returnSummary;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'advancedParamsShrink' => 'advancedParams',
        'enableRerank' => 'enableRerank',
        'industry' => 'industry',
        'page' => 'page',
        'query' => 'query',
        'returnMainText' => 'returnMainText',
        'returnMarkdownText' => 'returnMarkdownText',
        'returnRichMainBody' => 'returnRichMainBody',
        'returnSummary' => 'returnSummary',
        'sessionId' => 'sessionId',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedParamsShrink) {
            $res['advancedParams'] = $this->advancedParamsShrink;
        }

        if (null !== $this->enableRerank) {
            $res['enableRerank'] = $this->enableRerank;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->returnMainText) {
            $res['returnMainText'] = $this->returnMainText;
        }

        if (null !== $this->returnMarkdownText) {
            $res['returnMarkdownText'] = $this->returnMarkdownText;
        }

        if (null !== $this->returnRichMainBody) {
            $res['returnRichMainBody'] = $this->returnRichMainBody;
        }

        if (null !== $this->returnSummary) {
            $res['returnSummary'] = $this->returnSummary;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = $this->timeRange;
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
        if (isset($map['advancedParams'])) {
            $model->advancedParamsShrink = $map['advancedParams'];
        }

        if (isset($map['enableRerank'])) {
            $model->enableRerank = $map['enableRerank'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['returnMainText'])) {
            $model->returnMainText = $map['returnMainText'];
        }

        if (isset($map['returnMarkdownText'])) {
            $model->returnMarkdownText = $map['returnMarkdownText'];
        }

        if (isset($map['returnRichMainBody'])) {
            $model->returnRichMainBody = $map['returnRichMainBody'];
        }

        if (isset($map['returnSummary'])) {
            $model->returnSummary = $map['returnSummary'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
