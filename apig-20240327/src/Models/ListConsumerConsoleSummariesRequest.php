<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListConsumerConsoleSummariesRequest extends Model
{
    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nameLike;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'filter' => 'filter',
        'gatewayId' => 'gatewayId',
        'maxResults' => 'maxResults',
        'nameLike' => 'nameLike',
        'nextToken' => 'nextToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
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
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
