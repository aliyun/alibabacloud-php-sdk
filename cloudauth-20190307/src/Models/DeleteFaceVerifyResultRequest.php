<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DeleteFaceVerifyResultRequest extends Model
{
    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $deleteAfterQuery;
    protected $_name = [
        'certifyId' => 'CertifyId',
        'deleteAfterQuery' => 'DeleteAfterQuery',
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

        if (null !== $this->deleteAfterQuery) {
            $res['DeleteAfterQuery'] = $this->deleteAfterQuery;
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

        if (isset($map['DeleteAfterQuery'])) {
            $model->deleteAfterQuery = $map['DeleteAfterQuery'];
        }

        return $model;
    }
}
