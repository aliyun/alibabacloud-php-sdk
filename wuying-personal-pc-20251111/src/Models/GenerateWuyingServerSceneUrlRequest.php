<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wuyingpersonalpc\V20251111\Models;

use AlibabaCloud\Dara\Model;

class GenerateWuyingServerSceneUrlRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $loginRegionId;

    /**
     * @var string
     */
    public $loginToken;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uuid;

    /**
     * @var string
     */
    public $wuyingServerId;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientIp' => 'ClientIp',
        'clientOS' => 'ClientOS',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'endUserId' => 'EndUserId',
        'loginRegionId' => 'LoginRegionId',
        'loginToken' => 'LoginToken',
        'productType' => 'ProductType',
        'scene' => 'Scene',
        'sessionId' => 'SessionId',
        'uuid' => 'Uuid',
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->loginRegionId) {
            $res['LoginRegionId'] = $this->loginRegionId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LoginRegionId'])) {
            $model->loginRegionId = $map['LoginRegionId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        return $model;
    }
}
