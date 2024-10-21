<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class DeleteFaceVerifyResultRequest extends Model
{
    /**
     * @example shae18209d29ce4e8ba252caae98ab15
     *
     * @var string
     */
    public $certifyId;

    /**
     * @example Y
     *
     * @var string
     */
    public $deleteAfterQuery;
    protected $_name = [
        'certifyId'        => 'CertifyId',
        'deleteAfterQuery' => 'DeleteAfterQuery',
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
        if (null !== $this->deleteAfterQuery) {
            $res['DeleteAfterQuery'] = $this->deleteAfterQuery;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceVerifyResultRequest
     */
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
