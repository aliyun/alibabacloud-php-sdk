<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class GetMemberResponseBody extends Model
{
    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $publicKey;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $keySource;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $KMSKeyVersion;

    /**
     * @var string
     */
    public $keyMeta;

    /**
     * @var string
     */
    public $aliUid;
    protected $_name = [
        'KMSKeyId'      => 'KMSKeyId',
        'keyType'       => 'KeyType',
        'requestId'     => 'RequestId',
        'publicKey'     => 'PublicKey',
        'createTime'    => 'CreateTime',
        'ledgerId'      => 'LedgerId',
        'keySource'     => 'KeySource',
        'role'          => 'Role',
        'memberId'      => 'MemberId',
        'state'         => 'State',
        'updateTime'    => 'UpdateTime',
        'KMSKeyVersion' => 'KMSKeyVersion',
        'keyMeta'       => 'KeyMeta',
        'aliUid'        => 'AliUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->publicKey) {
            $res['PublicKey'] = $this->publicKey;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->keySource) {
            $res['KeySource'] = $this->keySource;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->KMSKeyVersion) {
            $res['KMSKeyVersion'] = $this->KMSKeyVersion;
        }
        if (null !== $this->keyMeta) {
            $res['KeyMeta'] = $this->keyMeta;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMemberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PublicKey'])) {
            $model->publicKey = $map['PublicKey'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['KeySource'])) {
            $model->keySource = $map['KeySource'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['KMSKeyVersion'])) {
            $model->KMSKeyVersion = $map['KMSKeyVersion'];
        }
        if (isset($map['KeyMeta'])) {
            $model->keyMeta = $map['KeyMeta'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        return $model;
    }
}
