<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetSignatureApisRequest extends Model
{
    /**
     * @var string
     */
    public $apiIds;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $signatureId;

    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiIds' => 'ApiIds',
        'groupId' => 'GroupId',
        'securityToken' => 'SecurityToken',
        'signatureId' => 'SignatureId',
        'stageName' => 'StageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->signatureId) {
            $res['SignatureId'] = $this->signatureId;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['ApiIds'])) {
            $model->apiIds = $map['ApiIds'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SignatureId'])) {
            $model->signatureId = $map['SignatureId'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
