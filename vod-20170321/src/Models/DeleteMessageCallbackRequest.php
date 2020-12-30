<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMessageCallbackRequest extends Model
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
    public $appId;
    protected $_name = [
        'ownerAccount'        => 'OwnerAccount',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'appId'               => 'AppId',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMessageCallbackRequest
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
