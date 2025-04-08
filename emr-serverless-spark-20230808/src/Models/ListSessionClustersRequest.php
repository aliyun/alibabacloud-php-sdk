<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListSessionClustersRequest extends Model
{
    /**
     * @var string
     */
    public $kind;

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
    public $queueName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sessionClusterId;
    protected $_name = [
        'kind' => 'kind',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'queueName' => 'queueName',
        'regionId' => 'regionId',
        'sessionClusterId' => 'sessionClusterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
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
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }

        return $model;
    }
}
