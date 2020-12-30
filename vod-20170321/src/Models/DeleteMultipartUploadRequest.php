<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMultipartUploadRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaType;
    protected $_name = [
        'ownerAccount'        => 'OwnerAccount',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'mediaId'             => 'MediaId',
        'mediaType'           => 'MediaType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMultipartUploadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        return $model;
    }
}
