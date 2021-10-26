<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults;

use AlibabaCloud\Tea\Model;

class deployedResult extends Model
{
    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $stageName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $apiUid;

    /**
     * @var string
     */
    public $deployedStatus;
    protected $_name = [
        'errorMsg'       => 'ErrorMsg',
        'stageName'      => 'StageName',
        'groupId'        => 'GroupId',
        'apiUid'         => 'ApiUid',
        'deployedStatus' => 'DeployedStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->deployedStatus) {
            $res['DeployedStatus'] = $this->deployedStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['DeployedStatus'])) {
            $model->deployedStatus = $map['DeployedStatus'];
        }

        return $model;
    }
}
