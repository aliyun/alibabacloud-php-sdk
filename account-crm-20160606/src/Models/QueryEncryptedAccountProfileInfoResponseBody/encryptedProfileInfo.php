<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\QueryEncryptedAccountProfileInfoResponseBody;

use AlibabaCloud\Dara\Model;

class encryptedProfileInfo extends Model
{
    /**
     * @var string
     */
    public $encryptedAliyunID;

    /**
     * @var string
     */
    public $encryptedEmail;

    /**
     * @var string
     */
    public $encryptedMobile;

    /**
     * @var string
     */
    public $encryptedSecurityMobile;

    /**
     * @var bool
     */
    public $isAliyunIdAnEmail;

    /**
     * @var string
     */
    public $pk;
    protected $_name = [
        'encryptedAliyunID' => 'EncryptedAliyunID',
        'encryptedEmail' => 'EncryptedEmail',
        'encryptedMobile' => 'EncryptedMobile',
        'encryptedSecurityMobile' => 'EncryptedSecurityMobile',
        'isAliyunIdAnEmail' => 'IsAliyunIdAnEmail',
        'pk' => 'pk',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->encryptedAliyunID) {
            $res['EncryptedAliyunID'] = $this->encryptedAliyunID;
        }

        if (null !== $this->encryptedEmail) {
            $res['EncryptedEmail'] = $this->encryptedEmail;
        }

        if (null !== $this->encryptedMobile) {
            $res['EncryptedMobile'] = $this->encryptedMobile;
        }

        if (null !== $this->encryptedSecurityMobile) {
            $res['EncryptedSecurityMobile'] = $this->encryptedSecurityMobile;
        }

        if (null !== $this->isAliyunIdAnEmail) {
            $res['IsAliyunIdAnEmail'] = $this->isAliyunIdAnEmail;
        }

        if (null !== $this->pk) {
            $res['pk'] = $this->pk;
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
        if (isset($map['EncryptedAliyunID'])) {
            $model->encryptedAliyunID = $map['EncryptedAliyunID'];
        }

        if (isset($map['EncryptedEmail'])) {
            $model->encryptedEmail = $map['EncryptedEmail'];
        }

        if (isset($map['EncryptedMobile'])) {
            $model->encryptedMobile = $map['EncryptedMobile'];
        }

        if (isset($map['EncryptedSecurityMobile'])) {
            $model->encryptedSecurityMobile = $map['EncryptedSecurityMobile'];
        }

        if (isset($map['IsAliyunIdAnEmail'])) {
            $model->isAliyunIdAnEmail = $map['IsAliyunIdAnEmail'];
        }

        if (isset($map['pk'])) {
            $model->pk = $map['pk'];
        }

        return $model;
    }
}
