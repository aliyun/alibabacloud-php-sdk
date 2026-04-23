<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterQueryBillingRuleListRequest extends Model
{
    /**
     * @var bool
     */
    public $activeOnly;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $modelCode;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'activeOnly' => 'activeOnly',
        'maxResults' => 'maxResults',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelType' => 'modelType',
        'nextToken' => 'nextToken',
        'page' => 'page',
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeOnly) {
            $res['activeOnly'] = $this->activeOnly;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['activeOnly'])) {
            $model->activeOnly = $map['activeOnly'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
