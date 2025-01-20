<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserNickList;

class orderBaseInfo extends Model
{
    /**
     * @var string
     */
    public $attachmentKey;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $committer;
    /**
     * @var int
     */
    public $committerId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $lastModifyTime;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $originAttachmentName;
    /**
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
     * @var string
     */
    public $statusCode;
    /**
     * @var string
     */
    public $statusDesc;
    /**
     * @var int
     */
    public $workflowInstanceId;
    /**
     * @var string
     */
    public $workflowStatusDesc;
    protected $_name = [
        'attachmentKey'        => 'AttachmentKey',
        'comment'              => 'Comment',
        'committer'            => 'Committer',
        'committerId'          => 'CommitterId',
        'createTime'           => 'CreateTime',
        'lastModifyTime'       => 'LastModifyTime',
        'orderId'              => 'OrderId',
        'originAttachmentName' => 'OriginAttachmentName',
        'pluginType'           => 'PluginType',
        'relatedUserList'      => 'RelatedUserList',
        'relatedUserNickList'  => 'RelatedUserNickList',
        'statusCode'           => 'StatusCode',
        'statusDesc'           => 'StatusDesc',
        'workflowInstanceId'   => 'WorkflowInstanceId',
        'workflowStatusDesc'   => 'WorkflowStatusDesc',
    ];

    public function validate()
    {
        if (null !== $this->relatedUserList) {
            $this->relatedUserList->validate();
        }
        if (null !== $this->relatedUserNickList) {
            $this->relatedUserNickList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }

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

        if (null !== $this->originAttachmentName) {
            $res['OriginAttachmentName'] = $this->originAttachmentName;
        }

        if (null !== $this->pluginType) {
            $res['PluginType'] = $this->pluginType;
        }

        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = null !== $this->relatedUserList ? $this->relatedUserList->toArray($noStream) : $this->relatedUserList;
        }

        if (null !== $this->relatedUserNickList) {
            $res['RelatedUserNickList'] = null !== $this->relatedUserNickList ? $this->relatedUserNickList->toArray($noStream) : $this->relatedUserNickList;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }

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

        if (isset($map['OriginAttachmentName'])) {
            $model->originAttachmentName = $map['OriginAttachmentName'];
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
