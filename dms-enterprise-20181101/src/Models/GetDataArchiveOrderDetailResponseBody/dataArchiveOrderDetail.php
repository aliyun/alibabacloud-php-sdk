<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginParam;
use AlibabaCloud\Tea\Model;

class dataArchiveOrderDetail extends Model
{
    /**
     * @example Archiving of test results
     *
     * @var string
     */
    public $comment;

    /**
     * @example dmstest
     *
     * @var string
     */
    public $committer;

    /**
     * @example 26***
     *
     * @var int
     */
    public $committerId;

    /**
     * @example 2023-05-15 16:00:48
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-05-23 16:00:48
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 868****
     *
     * @var int
     */
    public $id;

    /**
     * @var pluginExtraData
     */
    public $pluginExtraData;

    /**
     * @var pluginParam
     */
    public $pluginParam;

    /**
     * @example DATA_ARCHIVE
     *
     * @var string
     */
    public $pluginType;

    /**
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @var string[]
     */
    public $relatedUserNickList;

    /**
     * @example processing
     *
     * @var string
     */
    public $statusCode;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @example 29****
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'comment'             => 'Comment',
        'committer'           => 'Committer',
        'committerId'         => 'CommitterId',
        'gmtCreate'           => 'GmtCreate',
        'gmtModified'         => 'GmtModified',
        'id'                  => 'Id',
        'pluginExtraData'     => 'PluginExtraData',
        'pluginParam'         => 'PluginParam',
        'pluginType'          => 'PluginType',
        'relatedUserList'     => 'RelatedUserList',
        'relatedUserNickList' => 'RelatedUserNickList',
        'statusCode'          => 'StatusCode',
        'statusDesc'          => 'StatusDesc',
        'workflowInstanceId'  => 'WorkflowInstanceId',
        'workflowStatusDesc'  => 'WorkflowStatusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pluginExtraData) {
            $res['PluginExtraData'] = null !== $this->pluginExtraData ? $this->pluginExtraData->toMap() : null;
        }
        if (null !== $this->pluginParam) {
            $res['PluginParam'] = null !== $this->pluginParam ? $this->pluginParam->toMap() : null;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->relatedUserNickList) {
            $res['RelatedUserNickList'] = $this->relatedUserNickList;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->workflowStatusDesc) {
            $res['WorkflowStatusDesc'] = $this->workflowStatusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataArchiveOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PluginExtraData'])) {
            $model->pluginExtraData = pluginExtraData::fromMap($map['PluginExtraData']);
        }
        if (isset($map['PluginParam'])) {
            $model->pluginParam = pluginParam::fromMap($map['PluginParam']);
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['RelatedUserNickList'])) {
            if (!empty($map['RelatedUserNickList'])) {
                $model->relatedUserNickList = $map['RelatedUserNickList'];
            }
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }
        if (isset($map['WorkflowStatusDesc'])) {
            $model->workflowStatusDesc = $map['WorkflowStatusDesc'];
        }

        return $model;
    }
}
