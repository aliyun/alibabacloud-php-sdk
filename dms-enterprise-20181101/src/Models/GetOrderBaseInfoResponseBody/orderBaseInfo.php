<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserNickList;
use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @var relatedUserNickList
     */
    public $relatedUserNickList;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $committer;

    /**
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @var int
     */
    public $committerId;

    /**
     * @var string
     */
    public $lastModifyTime;

    /**
     * @var string
     */
    public $statusCode;

    /**
     * @var relatedUserList
     */
    public $relatedUserList;

    /**
     * @var string
     */
    public $workflowStatusDesc;

    /**
     * @var string
     */
    public $statusDesc;

    /**
     * @var string
     */
    public $pluginType;

    /**
     * @var int
     */
    public $orderId;
    protected $_name = [
        'relatedUserNickList' => 'RelatedUserNickList',
        'comment'             => 'Comment',
        'createTime'          => 'CreateTime',
        'committer'           => 'Committer',
        'workflowInstanceId'  => 'WorkflowInstanceId',
        'committerId'         => 'CommitterId',
        'lastModifyTime'      => 'LastModifyTime',
        'statusCode'          => 'StatusCode',
        'relatedUserList'     => 'RelatedUserList',
        'workflowStatusDesc'  => 'WorkflowStatusDesc',
        'statusDesc'          => 'StatusDesc',
        'pluginType'          => 'PluginType',
        'orderId'             => 'OrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->relatedUserNickList) {
            $res['RelatedUserNickList'] = null !== $this->relatedUserNickList ? $this->relatedUserNickList->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->committer) {
            $res['Committer'] = $this->committer;
        }
        if (null !== $this->workflowInstanceId) {
            $res['WorkflowInstanceId'] = $this->workflowInstanceId;
        }
        if (null !== $this->committerId) {
            $res['CommitterId'] = $this->committerId;
        }
        if (null !== $this->lastModifyTime) {
            $res['LastModifyTime'] = $this->lastModifyTime;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = null !== $this->relatedUserList ? $this->relatedUserList->toMap() : null;
        }
        if (null !== $this->workflowStatusDesc) {
            $res['WorkflowStatusDesc'] = $this->workflowStatusDesc;
        }
        if (null !== $this->statusDesc) {
            $res['StatusDesc'] = $this->statusDesc;
        }
        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
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
        if (isset($map['RelatedUserNickList'])) {
            $model->relatedUserNickList = relatedUserNickList::fromMap($map['RelatedUserNickList']);
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Committer'])) {
            $model->committer = $map['Committer'];
        }
        if (isset($map['WorkflowInstanceId'])) {
            $model->workflowInstanceId = $map['WorkflowInstanceId'];
        }
        if (isset($map['CommitterId'])) {
            $model->committerId = $map['CommitterId'];
        }
        if (isset($map['LastModifyTime'])) {
            $model->lastModifyTime = $map['LastModifyTime'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserList = relatedUserList::fromMap($map['RelatedUserList']);
        }
        if (isset($map['WorkflowStatusDesc'])) {
            $model->workflowStatusDesc = $map['WorkflowStatusDesc'];
        }
        if (isset($map['StatusDesc'])) {
            $model->statusDesc = $map['StatusDesc'];
        }
        if (isset($map['PluginType'])) {
            $model->pluginType = $map['PluginType'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        return $model;
    }
}
