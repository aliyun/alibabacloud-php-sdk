<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIImageAuditJobRequest extends Model
{
    /**
     * @description The configuration information about the review job.
     *
     *   Other configuration items of the review job. Only the ResourceType field is supported. This field is used to specify the type of media files. You can adjust review standards and rules based on the type of media files.
     *   The value of ResourceType can contain only letters, digits, and underscores (_).
     *
     * > *   You can specify a value for the ResourceType field based on the preceding limits. After you specify a value for the ResourceType field, you must [submit a ticket](https://yida.alibaba-inc.com/o/ticketapply). The value takes effect after Alibaba Cloud processes your ticket.
     * >*   If you want to change moderation policies and rules based on ResourceType, [submit a ticket](https://yida.alibaba-inc.com/o/ticketapply) to contact technical support.
     * @example {"ResourceType":"****_short_video"}
     *
     * @var string
     */
    public $mediaAuditConfiguration;

    /**
     * @description The ID of the image.
     *
     * This parameter is required.
     * @example f1aa3024aee64*****6dc8ca20dbc320
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the AI template. You can use one of the following methods to obtain the ID:
     *
     *   Obtain the value of TemplateId from the response to the [AddAITemplate](https://help.aliyun.com/document_detail/102930.html) operation that you call to create an AI template.
     *   Obtain the value of TemplateId from the response to the [ListAITemplate](https://help.aliyun.com/document_detail/102936.html) operation that you call to create an AI template.
     *
     * This parameter is required.
     * @example VOD-0003-00****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'mediaAuditConfiguration' => 'MediaAuditConfiguration',
        'mediaId'                 => 'MediaId',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'templateId'              => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaAuditConfiguration) {
            $res['MediaAuditConfiguration'] = $this->mediaAuditConfiguration;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAIImageAuditJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaAuditConfiguration'])) {
            $model->mediaAuditConfiguration = $map['MediaAuditConfiguration'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
