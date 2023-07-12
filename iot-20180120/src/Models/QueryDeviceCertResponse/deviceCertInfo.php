<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceCertResponse;

use AlibabaCloud\Tea\Model;

class deviceCertInfo extends Model
{
    /**
     * @var string
     */
    public $certSN;

    /**
     * @var string
     */
    public $certificate;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'certSN'      => 'CertSN',
        'certificate' => 'Certificate',
        'privateKey'  => 'PrivateKey',
        'status'      => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('certSN', $this->certSN, true);
        Model::validateRequired('certificate', $this->certificate, true);
        Model::validateRequired('privateKey', $this->privateKey, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certSN) {
            $res['CertSN'] = $this->certSN;
        }
        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CertSN'])) {
            $model->certSN = $map['CertSN'];
        }
        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
