<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiamdeveloperapi\V20220225\Models\FetchOAuthAuthenticationTokenResponseBody;

use AlibabaCloud\Dara\Model;

class oauthAccessTokenContent extends Model
{
    /**
     * @var string
     */
    public $accessTokenValue;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessTokenValue' => 'accessTokenValue',
        'scope' => 'scope',
        'tokenType' => 'tokenType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessTokenValue) {
            $res['accessTokenValue'] = $this->accessTokenValue;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->tokenType) {
            $res['tokenType'] = $this->tokenType;
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
        if (isset($map['accessTokenValue'])) {
            $model->accessTokenValue = $map['accessTokenValue'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['tokenType'])) {
            $model->tokenType = $map['tokenType'];
        }

        return $model;
    }
}
