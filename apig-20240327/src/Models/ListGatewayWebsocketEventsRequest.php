<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListGatewayWebsocketEventsRequest extends Model
{
    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $turnId;
    protected $_name = [
        'connectionId' => 'connectionId',
        'endTime' => 'endTime',
        'maxResults' => 'maxResults',
        'model' => 'model',
        'nextToken' => 'nextToken',
        'provider' => 'provider',
        'source' => 'source',
        'startTime' => 'startTime',
        'turnId' => 'turnId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['connectionId'] = $this->connectionId;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->turnId) {
            $res['turnId'] = $this->turnId;
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
        if (isset($map['connectionId'])) {
            $model->connectionId = $map['connectionId'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['turnId'])) {
            $model->turnId = $map['turnId'];
        }

        return $model;
    }
}
