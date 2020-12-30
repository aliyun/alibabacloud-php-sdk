<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitAIImageAuditJobRequest extends Model
{
    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $mediaAuditConfiguration;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'ownerAccount'            => 'OwnerAccount',
        'mediaId'                 => 'MediaId',
        'templateId'              => 'TemplateId',
        'mediaAuditConfiguration' => 'MediaAuditConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->mediaAuditConfiguration) {
            $res['MediaAuditConfiguration'] = $this->mediaAuditConfiguration;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['MediaAuditConfiguration'])) {
            $model->mediaAuditConfiguration = $map['MediaAuditConfiguration'];
        }

        return $model;
    }
}
