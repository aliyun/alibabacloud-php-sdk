<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\PhoneNumberEncryptResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $encryptedNumber;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $originalNumber;

    /**
     * @var string
     */
    public $outId;
    protected $_name = [
        'encryptedNumber' => 'EncryptedNumber',
        'expireTime' => 'ExpireTime',
        'originalNumber' => 'OriginalNumber',
        'outId' => 'OutId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->outId) {
            $res['OutId'] = $this->outId;
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
        if (isset($map['EncryptedNumber'])) {
            $model->encryptedNumber = $map['EncryptedNumber'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['OriginalNumber'])) {
            $model->originalNumber = $map['OriginalNumber'];
        }

        if (isset($map['OutId'])) {
            $model->outId = $map['OutId'];
        }

        return $model;
    }
}
