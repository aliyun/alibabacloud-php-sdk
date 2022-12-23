<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetCrossdomainContentRequest extends Model
{
    /**
     * @description The content of the cross-domain policy file. The file must be in the XML format and can contain up to 2,048 characters.
     *
     * @example &lt;cross-domain-policy&gt;&lt;allow-access-from domain="*"/&gt;&lt;allow-http-request-headers-from domain="*" headers="*" secure="false"/&gt;&lt;/cross-domain-policy&gt;
     *
     * @var string
     */
    public $content;

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
     * @description The ID of the resource owner.
     *
     * @example 3461111
     *
     * @var string
     */
    public $resourceRealOwnerId;

    /**
     * @description The URL of the Object Storage Service (OSS) bucket.
     *
     * @example outin-67870fd5b****1e98a3900163e1c35d5.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;
    protected $_name = [
        'content'              => 'Content',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceRealOwnerId'  => 'ResourceRealOwnerId',
        'storageLocation'      => 'StorageLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
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
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetCrossdomainContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
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
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        return $model;
    }
}
