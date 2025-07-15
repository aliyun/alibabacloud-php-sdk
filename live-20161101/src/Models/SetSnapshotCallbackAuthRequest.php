<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetSnapshotCallbackAuthRequest extends Model
{
    /**
     * @description The custom key that is used for callback authentication.
     *
     * This parameter is required.
     *
     * @example yourkey
     *
     * @var string
     */
    public $callbackAuthKey;

    /**
     * @description Specifies whether to enable callback authentication. Valid values:
     *
     *   **yes**: enables callback authentication.
     *   **no**: disables callback authentication.
     *
     * This parameter is required.
     *
     * @example yes
     *
     * @var string
     */
    public $callbackReqAuth;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'callbackAuthKey' => 'CallbackAuthKey',
        'callbackReqAuth' => 'CallbackReqAuth',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackAuthKey) {
            $res['CallbackAuthKey'] = $this->callbackAuthKey;
        }
        if (null !== $this->callbackReqAuth) {
            $res['CallbackReqAuth'] = $this->callbackReqAuth;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetSnapshotCallbackAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackAuthKey'])) {
            $model->callbackAuthKey = $map['CallbackAuthKey'];
        }
        if (isset($map['CallbackReqAuth'])) {
            $model->callbackReqAuth = $map['CallbackReqAuth'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
