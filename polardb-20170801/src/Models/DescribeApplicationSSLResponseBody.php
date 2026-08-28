<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeApplicationSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $certExpiredTime;

    /**
     * @var string
     */
    public $certFingerprintSha256Der;

    /**
     * @var string
     */
    public $certModifiedTime;

    /**
     * @var string
     */
    public $certSource;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $SSLAutoRotate;

    /**
     * @var bool
     */
    public $SSLEnabled;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'certExpiredTime' => 'CertExpiredTime',
        'certFingerprintSha256Der' => 'CertFingerprintSha256Der',
        'certModifiedTime' => 'CertModifiedTime',
        'certSource' => 'CertSource',
        'requestId' => 'RequestId',
        'SSLAutoRotate' => 'SSLAutoRotate',
        'SSLEnabled' => 'SSLEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }

        if (null !== $this->certExpiredTime) {
            $res['CertExpiredTime'] = $this->certExpiredTime;
        }

        if (null !== $this->certFingerprintSha256Der) {
            $res['CertFingerprintSha256Der'] = $this->certFingerprintSha256Der;
        }

        if (null !== $this->certModifiedTime) {
            $res['CertModifiedTime'] = $this->certModifiedTime;
        }

        if (null !== $this->certSource) {
            $res['CertSource'] = $this->certSource;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SSLAutoRotate) {
            $res['SSLAutoRotate'] = $this->SSLAutoRotate;
        }

        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
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
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }

        if (isset($map['CertExpiredTime'])) {
            $model->certExpiredTime = $map['CertExpiredTime'];
        }

        if (isset($map['CertFingerprintSha256Der'])) {
            $model->certFingerprintSha256Der = $map['CertFingerprintSha256Der'];
        }

        if (isset($map['CertModifiedTime'])) {
            $model->certModifiedTime = $map['CertModifiedTime'];
        }

        if (isset($map['CertSource'])) {
            $model->certSource = $map['CertSource'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SSLAutoRotate'])) {
            $model->SSLAutoRotate = $map['SSLAutoRotate'];
        }

        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }

        return $model;
    }
}
