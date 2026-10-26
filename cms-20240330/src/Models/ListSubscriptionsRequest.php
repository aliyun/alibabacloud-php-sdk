<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListSubscriptionsRequest extends Model
{
    /**
     * @var string
     */
    public $agentUuid;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $notifyStrategyUuid;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $subscriptionId;

    /**
     * @var string
     */
    public $subscriptionName;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var bool
     */
    public $unbound;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'agentUuid' => 'agentUuid',
        'direction' => 'direction',
        'enable' => 'enable',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'notifyStrategyUuid' => 'notifyStrategyUuid',
        'orderBy' => 'orderBy',
        'subscriptionId' => 'subscriptionId',
        'subscriptionName' => 'subscriptionName',
        'subscriptionType' => 'subscriptionType',
        'unbound' => 'unbound',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentUuid) {
            $res['agentUuid'] = $this->agentUuid;
        }

        if (null !== $this->direction) {
            $res['direction'] = $this->direction;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->notifyStrategyUuid) {
            $res['notifyStrategyUuid'] = $this->notifyStrategyUuid;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->subscriptionId) {
            $res['subscriptionId'] = $this->subscriptionId;
        }

        if (null !== $this->subscriptionName) {
            $res['subscriptionName'] = $this->subscriptionName;
        }

        if (null !== $this->subscriptionType) {
            $res['subscriptionType'] = $this->subscriptionType;
        }

        if (null !== $this->unbound) {
            $res['unbound'] = $this->unbound;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['agentUuid'])) {
            $model->agentUuid = $map['agentUuid'];
        }

        if (isset($map['direction'])) {
            $model->direction = $map['direction'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['notifyStrategyUuid'])) {
            $model->notifyStrategyUuid = $map['notifyStrategyUuid'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['subscriptionId'])) {
            $model->subscriptionId = $map['subscriptionId'];
        }

        if (isset($map['subscriptionName'])) {
            $model->subscriptionName = $map['subscriptionName'];
        }

        if (isset($map['subscriptionType'])) {
            $model->subscriptionType = $map['subscriptionType'];
        }

        if (isset($map['unbound'])) {
            $model->unbound = $map['unbound'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
