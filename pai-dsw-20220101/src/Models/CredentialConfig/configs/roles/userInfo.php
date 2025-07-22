<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\CredentialConfig\configs\roles;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @example LT********
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @example 456******
     *
     * @var string
     */
    public $id;

    /**
     * @example ********
     *
     * @var string
     */
    public $securityToken;

    /**
     * @example sub
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'id' => 'Id',
        'securityToken' => 'SecurityToken',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
