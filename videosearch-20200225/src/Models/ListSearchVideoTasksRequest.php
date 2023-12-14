<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class ListSearchVideoTasksRequest extends Model
{
    /**
     * @example 123
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example [1,2]
     *
     * @var string
     */
    public $searchTypeList;

    /**
     * @example [1,2]
     *
     * @var string
     */
    public $sortList;

    /**
     * @example [1,2]
     *
     * @var string
     */
    public $statusList;

    /**
     * @example 1
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1
     *
     * @var string
     */
    public $videoId;

    /**
     * @example testVideoName
     *
     * @var string
     */
    public $videoName;
    protected $_name = [
        'clientToken'    => 'ClientToken',
        'description'    => 'Description',
        'instanceId'     => 'InstanceId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'searchTypeList' => 'SearchTypeList',
        'sortList'       => 'SortList',
        'statusList'     => 'StatusList',
        'taskId'         => 'TaskId',
        'videoId'        => 'VideoId',
        'videoName'      => 'VideoName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchTypeList) {
            $res['SearchTypeList'] = $this->searchTypeList;
        }
        if (null !== $this->sortList) {
            $res['SortList'] = $this->sortList;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->videoName) {
            $res['VideoName'] = $this->videoName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSearchVideoTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchTypeList'])) {
            $model->searchTypeList = $map['SearchTypeList'];
        }
        if (isset($map['SortList'])) {
            $model->sortList = $map['SortList'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['VideoName'])) {
            $model->videoName = $map['VideoName'];
        }

        return $model;
    }
}
