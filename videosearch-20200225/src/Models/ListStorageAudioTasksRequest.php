<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models;

use AlibabaCloud\Tea\Model;

class ListStorageAudioTasksRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $audioId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $statusList;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $storageInfoList;

    /**
     * @var string
     */
    public $sortList;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'taskId'          => 'TaskId',
        'audioId'         => 'AudioId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'instanceId'      => 'InstanceId',
        'statusList'      => 'StatusList',
        'description'     => 'Description',
        'storageInfoList' => 'StorageInfoList',
        'sortList'        => 'SortList',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageInfoList) {
            $res['StorageInfoList'] = $this->storageInfoList;
        }
        if (null !== $this->sortList) {
            $res['SortList'] = $this->sortList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStorageAudioTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['StatusList'])) {
            $model->statusList = $map['StatusList'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageInfoList'])) {
            $model->storageInfoList = $map['StorageInfoList'];
        }
        if (isset($map['SortList'])) {
            $model->sortList = $map['SortList'];
        }

        return $model;
    }
}
