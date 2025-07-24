<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class GenericSearchRequest extends Model
{
    /**
     * @var bool
     */
    public $enableRerank;

    /**
     * @var string
     */
    public $industry;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description This parameter is required.
     *
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
    public $returnSummary;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @example OneWeek
     *
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'enableRerank' => 'enableRerank',
        'industry' => 'industry',
        'page' => 'page',
        'query' => 'query',
        'returnMainText' => 'returnMainText',
        'returnMarkdownText' => 'returnMarkdownText',
        'returnSummary' => 'returnSummary',
        'sessionId' => 'sessionId',
        'timeRange' => 'timeRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return GenericSearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
