<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterQueryObservationChartsRequest extends Model
{
    /**
     * @var int
     */
    public $apiKeyId;

    /**
     * @var int
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientIds;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $memberUserIds;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'clientId' => 'clientId',
        'clientIds' => 'clientIds',
        'endTime' => 'endTime',
        'memberUserIds' => 'memberUserIds',
        'modelId' => 'modelId',
        'startTime' => 'startTime',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyId) {
            $res['apiKeyId'] = $this->apiKeyId;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->clientIds) {
            $res['clientIds'] = $this->clientIds;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->memberUserIds) {
            $res['memberUserIds'] = $this->memberUserIds;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['apiKeyId'])) {
            $model->apiKeyId = $map['apiKeyId'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['clientIds'])) {
            $model->clientIds = $map['clientIds'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['memberUserIds'])) {
            $model->memberUserIds = $map['memberUserIds'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
