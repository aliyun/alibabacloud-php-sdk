<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Dara\Model;

class AssignCertificateCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $certCount;

    /**
     * @var int
     */
    public $currentYearFreeCertCount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certCount' => 'CertCount',
        'currentYearFreeCertCount' => 'CurrentYearFreeCertCount',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certCount) {
            $res['CertCount'] = $this->certCount;
        }

        if (null !== $this->currentYearFreeCertCount) {
            $res['CurrentYearFreeCertCount'] = $this->currentYearFreeCertCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CertCount'])) {
            $model->certCount = $map['CertCount'];
        }

        if (isset($map['CurrentYearFreeCertCount'])) {
            $model->currentYearFreeCertCount = $map['CurrentYearFreeCertCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
