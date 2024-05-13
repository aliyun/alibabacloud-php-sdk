<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetOrderBaseInfoResponseBody\orderBaseInfo\relatedUserNickList;
use AlibabaCloud\Tea\Model;

class orderBaseInfo extends Model
{
    /**
     * @description The Key of the ticket attachment. This information is returned only when an attachment is uploaded when a ticket is created.
     *
     * @example upload_order_info_856887_f356366f-f0f8-42fc-ba57-4a509303e814_18072d8a9bce876e3073bc655c2865f.png
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The remarks of the ticket.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The applicant.
     *
     * @example xxx
     *
     * @var string
     */
    public $committer;

    /**
     * @description The ID of the applicant. Note: The ID is different from the Alibaba Cloud account ID of the applicant.
     *
     * @example 1
     *
     * @var int
     */
    public $committerId;

    /**
     * @description The time when the ticket was created.
     *
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the ticket was last modified.
     *
     * @example 2019-10-10 00:00:00
     *
     * @var string
     */
    public $lastModifyTime;

    /**
     * @description The ID of the ticket.
     *
     * @example 12345
     *
     * @var int
     */
    public $orderId;

    /**
     * @description The original file name of the ticket attachment. This information is returned only when an attachment is uploaded when a ticket is created.
     *
     * @example 18072d8a9bce876e3073bc655c2865f.png
     *
     * @var string
     */
    public $originAttachmentName;

    /**
     * @description The type of the ticket. For more information about the value of this parameter, see the request parameters of the [CreateOrder](https://help.aliyun.com/document_detail/465865.html) operation.
     *
     * @example DC_COMMON
     *
     * @var string
     */
    public $pluginType;

    /**
     * @description The IDs of the operators that are related to the ticket.
     *
     * @var relatedUserList
     */
    public $relatedUserList;

    /**
     * @description The nicknames of the operators that are related to the ticket.
     *
     * @var relatedUserNickList
     */
    public $relatedUserNickList;

    /**
     * @description The status code of the ticket. Valid values:
     *
     *   **new**: The ticket is created.
     *   **toaudit**: The ticket is being reviewed.
     *   **Approved**: The ticket is approved.
     *   **reject**: The ticket is rejected.
     *   **processing**: The ticket is being executed.
     *   **success**: The ticket is executed.
     *   **closed**: The ticket is closed.
     *
     * @example success
     *
     * @var string
     */
    public $statusCode;

    /**
     * @description The description of the status.
     *
     * @example success
     *
     * @var string
     */
    public $statusDesc;

    /**
     * @description The ID of the approval process.
     *
     * @example 1
     *
     * @var int
     */
    public $workflowInstanceId;

    /**
     * @description The description of the approval process.
     *
     * @example approved
     *
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
    }

    public function toMap()
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
