<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Tea\Model;

class QueryPushRecordsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 333526247
     *
     * @var int
     */
    public $appKey;

    /**
     * @description This parameter is required.
     *
     * @example 2021-09-29T06:24:58Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @example FFPpkmhCPm*****************xjk=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 8
     *
     * @var int
     */
    public $page;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example NOTICE
     *
     * @var string
     */
    public $pushType;

    /**
     * @example API
     *
     * @var string
     */
    public $source;

    /**
     * @description This parameter is required.
     *
     * @example 2021-09-15T02:05:24Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example DEVICE
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'appKey'    => 'AppKey',
        'endTime'   => 'EndTime',
        'keyword'   => 'Keyword',
        'nextToken' => 'NextToken',
        'page'      => 'Page',
        'pageSize'  => 'PageSize',
        'pushType'  => 'PushType',
        'source'    => 'Source',
        'startTime' => 'StartTime',
        'target'    => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPushRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
