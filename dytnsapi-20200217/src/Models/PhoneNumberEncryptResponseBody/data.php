<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberEncryptResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The encrypted phone number.
     *
     * @example 1400513****
     *
     * @var string
     */
    public $encryptedNumber;

    /**
     * @description The time when the phone number expires.
     *
     * @example 2022-05-27 16:05:23
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The original phone number.
     *
     * @example 1390000****
     *
     * @var string
     */
    public $originalNumber;
    protected $_name = [
        'encryptedNumber' => 'EncryptedNumber',
        'expireTime'      => 'ExpireTime',
        'originalNumber'  => 'OriginalNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->encryptedNumber) {
            $res['EncryptedNumber'] = $this->encryptedNumber;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->originalNumber) {
            $res['OriginalNumber'] = $this->originalNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EncryptedNumber'])) {
            $model->encryptedNumber = $map['EncryptedNumber'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['OriginalNumber'])) {
            $model->originalNumber = $map['OriginalNumber'];
        }

        return $model;
    }
}
