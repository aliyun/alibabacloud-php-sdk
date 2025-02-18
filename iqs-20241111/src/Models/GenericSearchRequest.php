<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class GenericSearchRequest extends Model
{
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
     * @var string
     */
    public $sessionId;
    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'industry'  => 'industry',
        'page'      => 'page',
        'query'     => 'query',
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
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
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
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
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
