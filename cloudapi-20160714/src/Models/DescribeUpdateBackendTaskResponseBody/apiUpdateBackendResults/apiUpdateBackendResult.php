<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateBackendTaskResponseBody\apiUpdateBackendResults;

use AlibabaCloud\Tea\Model;

class apiUpdateBackendResult extends Model
{
    /**
     * @description The name of the API.
     *
     * @example checkin_linechart_today
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The ID of the API.
     *
     * @example 14faa7ba0572445685866ddb6a6f19da
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The ID of the backend service.
     *
     * @example c09b078bcb8f4ade9677bd8b18cdf43f
     *
     * @var string
     */
    public $backendId;

    /**
     * @description The information about the rows that fail to be updated.
     *
     * @example Failed
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The ID of the API group.
     *
     * @example 3013a55c0c44483f984d26df27120513
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the API group.
     *
     * @example imotob1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The ID of the runtime environment.
     *
     * @example d8f2f54f3309458b8aaceb36c01c2dd9
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the environment.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;

    /**
     * @description The update result of the API.
     *
     * @example OVER
     *
     * @var string
     */
    public $updateStatus;
    protected $_name = [
        'apiName'      => 'ApiName',
        'apiUid'       => 'ApiUid',
        'backendId'    => 'BackendId',
        'errorMsg'     => 'ErrorMsg',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'stageId'      => 'StageId',
        'stageName'    => 'StageName',
        'updateStatus' => 'UpdateStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->backendId) {
            $res['BackendId'] = $this->backendId;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->updateStatus) {
            $res['UpdateStatus'] = $this->updateStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiUpdateBackendResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['BackendId'])) {
            $model->backendId = $map['BackendId'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['UpdateStatus'])) {
            $model->updateStatus = $map['UpdateStatus'];
        }

        return $model;
    }
}
