<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class ListMediaBasicInfosRequest extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $startTime;

    /**
     * @description 结束时间
     *
     * @var string
     */
    public $endTime;

    /**
     * @description 媒资媒体类型
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description 媒资业务类型
     *
     * @var string
     */
    public $businessType;

    /**
     * @description 来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 分类
     *
     * @var string
     */
    public $category;

    /**
     * @description 资源状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 页号
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 分页大小
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 排序
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description 返回值中是否包含文件基础信息
     *
     * @var bool
     */
    public $includeFileBasicInfo;
    protected $_name = [
        'startTime'            => 'StartTime',
        'endTime'              => 'EndTime',
        'mediaType'            => 'MediaType',
        'businessType'         => 'BusinessType',
        'source'               => 'Source',
        'category'             => 'Category',
        'status'               => 'Status',
        'nextToken'            => 'NextToken',
        'maxResults'           => 'MaxResults',
        'sortBy'               => 'SortBy',
        'includeFileBasicInfo' => 'IncludeFileBasicInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->includeFileBasicInfo) {
            $res['IncludeFileBasicInfo'] = $this->includeFileBasicInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMediaBasicInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['IncludeFileBasicInfo'])) {
            $model->includeFileBasicInfo = $map['IncludeFileBasicInfo'];
        }

        return $model;
    }
}
