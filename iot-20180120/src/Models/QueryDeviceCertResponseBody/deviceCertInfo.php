<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceCertResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCertInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $certSN;
    protected $_name = [
        'status'      => 'Status',
        'certificate' => 'Certificate',
        'privateKey'  => 'PrivateKey',
        'certSN'      => 'CertSN',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->certSN) {
            $res['CertSN'] = $this->certSN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceCertInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['CertSN'])) {
            $model->certSN = $map['CertSN'];
        }

        return $model;
    }
}
