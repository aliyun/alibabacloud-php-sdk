<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DeleteFaceVerifyResultResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @example sha58aeae7ea2f5ed069530f58df4e6d
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example N
     *
     * @var string
     */
    public $deleteResult;

    /**
     * @example NOT_DELETE_REPEATEDLY
     *
     * @var string
     */
    public $failReason;
    protected $_name = [
        'certifyId'    => 'CertifyId',
        'deleteResult' => 'DeleteResult',
        'failReason'   => 'FailReason',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return resultObject
     */
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
