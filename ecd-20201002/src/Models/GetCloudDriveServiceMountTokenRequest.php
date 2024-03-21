<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class GetCloudDriveServiceMountTokenRequest extends Model
{
    /**
     * @example 00e122c3-13fb-4fc3-bc7a-5d9acb89****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example v1972cd3446f0e523598916520951742474e6624fcdea6652994d47bc6157d27f7cc900c339db67882j3no4nh5bk3b4****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-hangzhou+dir-7186763****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 14e1fe41-ce9b-491d-aa8c-345jk2n4bk****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'loginToken'   => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'sessionId'    => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCloudDriveServiceMountTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
