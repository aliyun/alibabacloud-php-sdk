<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class AssumeUserInfo extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'id'            => 'Id',
        'securityToken' => 'SecurityToken',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

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
     * @return AssumeUserInfo
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
