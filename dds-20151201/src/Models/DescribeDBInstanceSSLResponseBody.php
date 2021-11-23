<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

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
        'requestId'      => 'RequestId',
        'SSLExpiredTime' => 'SSLExpiredTime',
        'SSLStatus'      => 'SSLStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
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

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
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
