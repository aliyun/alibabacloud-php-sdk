<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteMessageCallbackRequest extends Model
{
    /**
     * @description The ID of the application. If you do not set this parameter, the default value **app-1000000** is used.
     *
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'appId' => 'AppId',
        'ownerAccount' => 'OwnerAccount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
