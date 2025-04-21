<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $deleteResult;

    /**
     * @var string
     */
    public $failReason;
    protected $_name = [
        'certifyId' => 'CertifyId',
        'deleteResult' => 'DeleteResult',
        'failReason' => 'FailReason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->deleteResult) {
            $res['DeleteResult'] = $this->deleteResult;
        }

        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
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
        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['DeleteResult'])) {
            $model->deleteResult = $map['DeleteResult'];
        }

        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        return $model;
    }
}
