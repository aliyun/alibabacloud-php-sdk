<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceCertResponseBody;

use AlibabaCloud\Tea\Model;

class deviceCertInfo extends Model
{
    /**
     * @example 636217374433****
     *
     * @var string
     */
    public $certSN;

    /**
     * @example tXHf4ezGEHcwdyMwoCDHGBmk9avi****
     *
     * @var string
     */
    public $certificate;

    /**
     * @example CqXL5h5ysRTA4NxjABjj0010fa****
     *
     * @var string
     */
    public $privateKey;

    /**
     * @example 2
     *
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
