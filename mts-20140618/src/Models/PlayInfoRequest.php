<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class PlayInfoRequest extends Model
{
    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $formats;

    /**
     * @var string
     */
    public $authInfo;

    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $rand;

    /**
     * @var string
     */
    public $playDomain;

    /**
     * @var string
     */
    public $hlsUriToken;

    /**
     * @var string
     */
    public $terminal;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'ownerAccount'         => 'OwnerAccount',
        'mediaId'              => 'MediaId',
        'formats'              => 'Formats',
        'authInfo'             => 'AuthInfo',
        'authTimeout'          => 'AuthTimeout',
        'rand'                 => 'Rand',
        'playDomain'           => 'PlayDomain',
        'hlsUriToken'          => 'HlsUriToken',
        'terminal'             => 'Terminal',
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
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->formats) {
            $res['Formats'] = $this->formats;
        }
        if (null !== $this->authInfo) {
            $res['AuthInfo'] = $this->authInfo;
        }
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }
        if (null !== $this->rand) {
            $res['Rand'] = $this->rand;
        }
        if (null !== $this->playDomain) {
            $res['PlayDomain'] = $this->playDomain;
        }
        if (null !== $this->hlsUriToken) {
            $res['HlsUriToken'] = $this->hlsUriToken;
        }
        if (null !== $this->terminal) {
            $res['Terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PlayInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Formats'])) {
            $model->formats = $map['Formats'];
        }
        if (isset($map['AuthInfo'])) {
            $model->authInfo = $map['AuthInfo'];
        }
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }
        if (isset($map['Rand'])) {
            $model->rand = $map['Rand'];
        }
        if (isset($map['PlayDomain'])) {
            $model->playDomain = $map['PlayDomain'];
        }
        if (isset($map['HlsUriToken'])) {
            $model->hlsUriToken = $map['HlsUriToken'];
        }
        if (isset($map['Terminal'])) {
            $model->terminal = $map['Terminal'];
        }

        return $model;
    }
}
