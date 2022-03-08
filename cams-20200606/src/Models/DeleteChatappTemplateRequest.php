<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class DeleteChatappTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 模板编码
     *
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'templateCode'         => 'TemplateCode',
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteChatappTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }

        return $model;
    }
}
