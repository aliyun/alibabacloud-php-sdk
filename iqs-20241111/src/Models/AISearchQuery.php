<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class AISearchQuery extends Model
{
    /**
     * @var string
     */
    public $card;

    /**
     * @var string
     */
    public $cardQuery;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $searchEngine;

    /**
     * @var string
     */
    public $searchPlan;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'card'         => 'card',
        'cardQuery'    => 'cardQuery',
        'page'         => 'page',
        'query'        => 'query',
        'searchEngine' => 'searchEngine',
        'searchPlan'   => 'searchPlan',
        'sessionId'    => 'sessionId',
        'timeRange'    => 'timeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->card) {
            $res['card'] = $this->card;
        }
        if (null !== $this->cardQuery) {
            $res['cardQuery'] = $this->cardQuery;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->searchEngine) {
            $res['searchEngine'] = $this->searchEngine;
        }
        if (null !== $this->searchPlan) {
            $res['searchPlan'] = $this->searchPlan;
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
     * @return AISearchQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['card'])) {
            $model->card = $map['card'];
        }
        if (isset($map['cardQuery'])) {
            $model->cardQuery = $map['cardQuery'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['searchEngine'])) {
            $model->searchEngine = $map['searchEngine'];
        }
        if (isset($map['searchPlan'])) {
            $model->searchPlan = $map['searchPlan'];
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
