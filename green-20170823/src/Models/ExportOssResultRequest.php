<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class ExportOssResultRequest extends Model
{
    /**
     * @var string
     */
    public $bucket;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var float
     */
    public $maxScore;

    /**
     * @var float
     */
    public $minScore;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var bool
     */
    public $stock;

    /**
     * @var int
     */
    public $stockTaskId;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'bucket'       => 'Bucket',
        'currentPage'  => 'CurrentPage',
        'endDate'      => 'EndDate',
        'lang'         => 'Lang',
        'maxScore'     => 'MaxScore',
        'minScore'     => 'MinScore',
        'pageSize'     => 'PageSize',
        'resourceType' => 'ResourceType',
        'scene'        => 'Scene',
        'sourceIp'     => 'SourceIp',
        'startDate'    => 'StartDate',
        'stock'        => 'Stock',
        'stockTaskId'  => 'StockTaskId',
        'suggestion'   => 'Suggestion',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->stock) {
            $res['Stock'] = $this->stock;
        }
        if (null !== $this->stockTaskId) {
            $res['StockTaskId'] = $this->stockTaskId;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportOssResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Stock'])) {
            $model->stock = $map['Stock'];
        }
        if (isset($map['StockTaskId'])) {
            $model->stockTaskId = $map['StockTaskId'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
