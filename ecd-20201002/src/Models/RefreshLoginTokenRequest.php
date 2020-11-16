<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class RefreshLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $loginToken;
    protected $_name = [
        'regionId'    => 'RegionId',
        'clientId'    => 'ClientId',
        'directoryId' => 'DirectoryId',
        'endUserId'   => 'EndUserId',
        'loginToken'  => 'LoginToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('clientId', $this->clientId, true);
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('endUserId', $this->endUserId, true);
        Model::validateRequired('loginToken', $this->loginToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshLoginTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        return $model;
    }
}
