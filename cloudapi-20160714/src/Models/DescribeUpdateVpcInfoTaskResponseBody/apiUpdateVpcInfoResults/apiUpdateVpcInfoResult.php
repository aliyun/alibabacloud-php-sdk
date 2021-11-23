<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeUpdateVpcInfoTaskResponseBody\apiUpdateVpcInfoResults;

use AlibabaCloud\Tea\Model;

class apiUpdateVpcInfoResult extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $apiUid;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $stageId;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $updateStatus;
    protected $_name = [
        'apiName'      => 'ApiName',
        'apiUid'       => 'ApiUid',
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
     * @return apiUpdateVpcInfoResult
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
