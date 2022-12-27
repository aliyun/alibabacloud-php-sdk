<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateOAuthTokenResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2aeb4cd012af879e54f0d37dfa526f51
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description id
     *
     * @example 30815
     *
     * @var string
     */
    public $id;

    /**
     * @example read:repo
     *
     * @var string
     */
    public $scope;

    /**
     * @example code
     *
     * @var string
     */
    public $tokenType;
    protected $_name = [
        'accessToken' => 'accessToken',
        'id'          => 'id',
        'scope'       => 'scope',
        'tokenType'   => 'tokenType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->tokenType) {
            $res['tokenType'] = $this->tokenType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
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
