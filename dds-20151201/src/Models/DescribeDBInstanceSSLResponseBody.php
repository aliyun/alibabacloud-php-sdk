<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $forceEncryption;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SSLExpiredTime;

    /**
     * @var string
     */
    public $SSLStatus;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'forceEncryption' => 'ForceEncryption',
        'requestId' => 'RequestId',
        'SSLExpiredTime' => 'SSLExpiredTime',
        'SSLStatus' => 'SSLStatus',
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

        if (null !== $this->forceEncryption) {
            $res['ForceEncryption'] = $this->forceEncryption;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
        }

        if (null !== $this->SSLStatus) {
            $res['SSLStatus'] = $this->SSLStatus;
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

        if (isset($map['ForceEncryption'])) {
            $model->forceEncryption = $map['ForceEncryption'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }

        if (isset($map['SSLStatus'])) {
            $model->SSLStatus = $map['SSLStatus'];
        }

        return $model;
    }
}
