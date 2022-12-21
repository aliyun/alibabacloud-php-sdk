<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserNickList;
use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example xxx
     *
     * @var string
     */
    public $committer;

    /**
     * @example 1
     *
     * @var int
     */
    public $committerId;

    /**
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @example 12345
     *
     * @var int
     */
    public $orderId;

    /**
     * @example DC_COMMON
     *
     * @var string
     */
    public $pluginType;

    /**
     * @var relatedUserList
     */
    public $relatedUserList;

    /**
     * @var relatedUserNickList
     */
    public $relatedUserNickList;

    /**
     * @example success
     *
     * @var string
     */
    public $statusCode;

    /**
     * @example success
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @example 1
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @example approved
     *
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'comment'             => 'Comment',
        'committer'           => 'Committer',
        'committerId'         => 'CommitterId',
        'createTime'          => 'CreateTime',
        'lastModifyTime'      => 'LastModifyTime',
        'orderId'             => 'OrderId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = null !== $this->relatedUserList ? $this->relatedUserList->toMap() : null;
        }
        if (null !== $this->relatedUserNickList) {
            $res['RelatedUserNickList'] = null !== $this->relatedUserNickList ? $this->relatedUserNickList->toMap() : null;
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
     * @return orderBaseInfo
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserList = relatedUserList::fromMap($map['RelatedUserList']);
        }
        if (isset($map['RelatedUserNickList'])) {
            $model->relatedUserNickList = relatedUserNickList::fromMap($map['RelatedUserNickList']);
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
