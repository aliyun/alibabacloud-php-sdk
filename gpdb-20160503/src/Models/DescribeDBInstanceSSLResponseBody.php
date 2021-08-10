<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $SSLExpiredTime;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'requestId'      => 'RequestId',
        'SSLEnabled'     => 'SSLEnabled',
        'DBInstanceId'   => 'DBInstanceId',
        'certCommonName' => 'CertCommonName',
        'SSLExpiredTime' => 'SSLExpiredTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
        }
        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }

        return $model;
    }
}
