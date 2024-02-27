<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UploadCsrResponseBody extends Model
{
    /**
     * @description CSR ID。
     *
     * @example 2271
     *
     * @var int
     */
    public $csrId;

    /**
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'csrId'     => 'CsrId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->csrId) {
            $res['CsrId'] = $this->csrId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadCsrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CsrId'])) {
            $model->csrId = $map['CsrId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
