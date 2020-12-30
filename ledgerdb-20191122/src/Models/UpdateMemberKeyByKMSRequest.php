<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ledgerdb\V20191122\Models;

use AlibabaCloud\Tea\Model;

class UpdateMemberKeyByKMSRequest extends Model
{
    /**
     * @var string
     */
    public $ledgerId;

    /**
     * @var string
     */
    public $memberId;

    /**
     * @var string
     */
    public $keyType;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $KMSKeyVersion;
    protected $_name = [
        'ledgerId'      => 'LedgerId',
        'memberId'      => 'MemberId',
        'keyType'       => 'KeyType',
        'KMSKeyId'      => 'KMSKeyId',
        'KMSKeyVersion' => 'KMSKeyVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ledgerId) {
            $res['LedgerId'] = $this->ledgerId;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->keyType) {
            $res['KeyType'] = $this->keyType;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->KMSKeyVersion) {
            $res['KMSKeyVersion'] = $this->KMSKeyVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMemberKeyByKMSRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LedgerId'])) {
            $model->ledgerId = $map['LedgerId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['KeyType'])) {
            $model->keyType = $map['KeyType'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['KMSKeyVersion'])) {
            $model->KMSKeyVersion = $map['KMSKeyVersion'];
        }

        return $model;
    }
}
