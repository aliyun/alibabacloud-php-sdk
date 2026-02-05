<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\IntrospectAppInstanceTicketForPreviewResponseBody;

use AlibabaCloud\Dara\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $accessTokenExpiresAt;

    /**
     * @var string
     */
    public $accessTokenIssuedAt;

    /**
     * @var string
     */
    public $accessTokenValue;

    /**
     * @var string
     */
    public $aliyunPk;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $authorizationGrantType;

    /**
     * @var string
     */
    public $bid;

    /**
     * @var string
     */
    public $parentPk;

    /**
     * @var string
     */
    public $refreshTokenExpiresAt;

    /**
     * @var string
     */
    public $refreshTokenIssuedAt;

    /**
     * @var string
     */
    public $refreshTokenValue;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accessTokenExpiresAt' => 'AccessTokenExpiresAt',
        'accessTokenIssuedAt' => 'AccessTokenIssuedAt',
        'accessTokenValue' => 'AccessTokenValue',
        'aliyunPk' => 'AliyunPk',
        'attributes' => 'Attributes',
        'authorizationGrantType' => 'AuthorizationGrantType',
        'bid' => 'Bid',
        'parentPk' => 'ParentPk',
        'refreshTokenExpiresAt' => 'RefreshTokenExpiresAt',
        'refreshTokenIssuedAt' => 'RefreshTokenIssuedAt',
        'refreshTokenValue' => 'RefreshTokenValue',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenExpiresAt) {
            $res['AccessTokenExpiresAt'] = $this->accessTokenExpiresAt;
        }

        if (null !== $this->accessTokenIssuedAt) {
            $res['AccessTokenIssuedAt'] = $this->accessTokenIssuedAt;
        }

        if (null !== $this->accessTokenValue) {
            $res['AccessTokenValue'] = $this->accessTokenValue;
        }

        if (null !== $this->aliyunPk) {
            $res['AliyunPk'] = $this->aliyunPk;
        }

        if (null !== $this->attributes) {
            $res['Attributes'] = $this->attributes;
        }

        if (null !== $this->authorizationGrantType) {
            $res['AuthorizationGrantType'] = $this->authorizationGrantType;
        }

        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }

        if (null !== $this->parentPk) {
            $res['ParentPk'] = $this->parentPk;
        }

        if (null !== $this->refreshTokenExpiresAt) {
            $res['RefreshTokenExpiresAt'] = $this->refreshTokenExpiresAt;
        }

        if (null !== $this->refreshTokenIssuedAt) {
            $res['RefreshTokenIssuedAt'] = $this->refreshTokenIssuedAt;
        }

        if (null !== $this->refreshTokenValue) {
            $res['RefreshTokenValue'] = $this->refreshTokenValue;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AccessTokenExpiresAt'])) {
            $model->accessTokenExpiresAt = $map['AccessTokenExpiresAt'];
        }

        if (isset($map['AccessTokenIssuedAt'])) {
            $model->accessTokenIssuedAt = $map['AccessTokenIssuedAt'];
        }

        if (isset($map['AccessTokenValue'])) {
            $model->accessTokenValue = $map['AccessTokenValue'];
        }

        if (isset($map['AliyunPk'])) {
            $model->aliyunPk = $map['AliyunPk'];
        }

        if (isset($map['Attributes'])) {
            $model->attributes = $map['Attributes'];
        }

        if (isset($map['AuthorizationGrantType'])) {
            $model->authorizationGrantType = $map['AuthorizationGrantType'];
        }

        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        if (isset($map['ParentPk'])) {
            $model->parentPk = $map['ParentPk'];
        }

        if (isset($map['RefreshTokenExpiresAt'])) {
            $model->refreshTokenExpiresAt = $map['RefreshTokenExpiresAt'];
        }

        if (isset($map['RefreshTokenIssuedAt'])) {
            $model->refreshTokenIssuedAt = $map['RefreshTokenIssuedAt'];
        }

        if (isset($map['RefreshTokenValue'])) {
            $model->refreshTokenValue = $map['RefreshTokenValue'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
