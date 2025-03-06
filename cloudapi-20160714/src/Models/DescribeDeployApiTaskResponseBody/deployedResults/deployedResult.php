<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults;

use AlibabaCloud\Tea\Model;

class deployedResult extends Model
{
    /**
     * @description The ID of the API.
     *
     * @example 0433c1cd84724923b7a4f9ca1cfc249c
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The deployment status of the API.
     *
     * @example OVER
     *
     * @var string
     */
    public $deployedStatus;

    /**
     * @description The error message.
     *
     * @example Success. Request Success.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The ID of the API group.
     *
     * @example e8da6f6346184da9a30d0dc1888b1f3b
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The runtime environment of the API. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiUid'         => 'ApiUid',
        'deployedStatus' => 'DeployedStatus',
        'errorMsg'       => 'ErrorMsg',
        'groupId'        => 'GroupId',
        'stageName'      => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiUid) {
            $res['ApiUid'] = $this->apiUid;
        }
        if (null !== $this->deployedStatus) {
            $res['DeployedStatus'] = $this->deployedStatus;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['ApiUid'])) {
            $model->apiUid = $map['ApiUid'];
        }
        if (isset($map['DeployedStatus'])) {
            $model->deployedStatus = $map['DeployedStatus'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
