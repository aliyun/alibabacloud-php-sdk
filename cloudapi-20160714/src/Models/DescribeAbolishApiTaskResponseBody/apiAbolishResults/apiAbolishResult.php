<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeAbolishApiTaskResponseBody\apiAbolishResults;

use AlibabaCloud\Tea\Model;

class apiAbolishResult extends Model
{
    /**
     * @description The ID of the API group.
     *
     * @example OVER
     *
     * @var string
     */
    public $abolishStatus;

    /**
     * @description auditing
     *
     * @example v2_page_consent
     *
     * @var string
     */
    public $apiName;

    /**
     * @description The error message.
     *
     * @example 4e26cdbbb113416dba1f0285bed29979
     *
     * @var string
     */
    public $apiUid;

    /**
     * @description The name of the runtime environment. Valid values:
     *
     *   **RELEASE**
     *   **TEST**
     *
     * @example Success. Request Success.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The name of the API group.
     *
     * @example 160cb6505e1c43a6b84346856d74eb47
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the API.
     *
     * @example wb2022021401619286
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The unpublishing status.
     *
     * @example 0919f2854a88484c91dc9253347c78f9
     *
     * @var string
     */
    public $stageId;

    /**
     * @description The name of the API.
     *
     * @example RELEASE
     *
     * @var string
     */
    public $stageName;
    protected $_name = [
        'abolishStatus' => 'AbolishStatus',
        'apiName'       => 'ApiName',
        'apiUid'        => 'ApiUid',
        'errorMsg'      => 'ErrorMsg',
        'groupId'       => 'GroupId',
        'groupName'     => 'GroupName',
        'stageId'       => 'StageId',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abolishStatus) {
            $res['AbolishStatus'] = $this->abolishStatus;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiAbolishResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbolishStatus'])) {
            $model->abolishStatus = $map['AbolishStatus'];
        }
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

        return $model;
    }
}
