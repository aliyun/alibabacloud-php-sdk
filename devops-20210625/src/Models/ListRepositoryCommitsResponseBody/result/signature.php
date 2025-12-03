<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListRepositoryCommitsResponseBody\result;

use AlibabaCloud\Dara\Model;

class signature extends Model
{
    /**
     * @var string
     */
    public $gpgKeyId;

    /**
     * @var string
     */
    public $verificationStatus;
    protected $_name = [
        'gpgKeyId' => 'gpgKeyId',
        'verificationStatus' => 'verificationStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gpgKeyId) {
            $res['gpgKeyId'] = $this->gpgKeyId;
        }

        if (null !== $this->verificationStatus) {
            $res['verificationStatus'] = $this->verificationStatus;
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
        if (isset($map['gpgKeyId'])) {
            $model->gpgKeyId = $map['gpgKeyId'];
        }

        if (isset($map['verificationStatus'])) {
            $model->verificationStatus = $map['verificationStatus'];
        }

        return $model;
    }
}
