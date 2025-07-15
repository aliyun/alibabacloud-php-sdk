<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveSnapshotNotifyConfigRequest extends Model
{
    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example www.yourdomain***.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The callback authentication key. The key must be 16 to 32 characters in length and can contain only letters and digits.
     *
     * > This parameter is required if you set the NotifyReqAuth parameter to **yes**.
     *
     * @example yourkey
     *
     * @var string
     */
    public $notifyAuthKey;

    /**
     * @description Specifies whether to enable callback authentication. Valid values:
     *
     *   **yes**
     *   **no** (default)
     *
     * > This parameter is required if you set the NotifyAuthKey parameter to yes.
     *
     * @example yes
     *
     * @var string
     */
    public $notifyReqAuth;

    /**
     * @description The callback URL. Specify a valid URL that is up to 500 characters in length.
     *
     * This parameter is required.
     *
     * @example http://callback.yourdomain***.com
     *
     * @var string
     */
    public $notifyUrl;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'domainName' => 'DomainName',
        'notifyAuthKey' => 'NotifyAuthKey',
        'notifyReqAuth' => 'NotifyReqAuth',
        'notifyUrl' => 'NotifyUrl',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->notifyAuthKey) {
            $res['NotifyAuthKey'] = $this->notifyAuthKey;
        }
        if (null !== $this->notifyReqAuth) {
            $res['NotifyReqAuth'] = $this->notifyReqAuth;
        }
        if (null !== $this->notifyUrl) {
            $res['NotifyUrl'] = $this->notifyUrl;
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
     * @return AddLiveSnapshotNotifyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['NotifyAuthKey'])) {
            $model->notifyAuthKey = $map['NotifyAuthKey'];
        }
        if (isset($map['NotifyReqAuth'])) {
            $model->notifyReqAuth = $map['NotifyReqAuth'];
        }
        if (isset($map['NotifyUrl'])) {
            $model->notifyUrl = $map['NotifyUrl'];
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
