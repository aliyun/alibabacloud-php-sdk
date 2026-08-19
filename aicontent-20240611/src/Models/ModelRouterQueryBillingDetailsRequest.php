<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterQueryBillingDetailsRequest extends Model
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
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $modelCodes;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelTypes;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'apiKeyId' => 'apiKeyId',
        'clientId' => 'clientId',
        'clientIds' => 'clientIds',
        'endTime' => 'endTime',
        'modelCodes' => 'modelCodes',
        'modelId' => 'modelId',
        'modelTypes' => 'modelTypes',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'requestId' => 'requestId',
        'startTime' => 'startTime',
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

        if (null !== $this->modelCodes) {
            $res['modelCodes'] = $this->modelCodes;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelTypes) {
            $res['modelTypes'] = $this->modelTypes;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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

        if (isset($map['modelCodes'])) {
            $model->modelCodes = $map['modelCodes'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelTypes'])) {
            $model->modelTypes = $map['modelTypes'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
