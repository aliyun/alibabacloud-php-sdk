<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceSSLResponseBody extends Model
{
    /**
     * @description The name of the SSL certificate.
     *
     * @example dds-bpxxxxxxxx.mongodb.rds.aliyuncs.com
     *
     * @var string
     */
    public $certCommonName;

    /**
     * @description The ID of the request.
     *
     * @example 36BB1BC2-789C-4BBA-A519-C5B388E4B0D4
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the SSL certificate expires. The time is in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-03-11T02:28:25Z
     *
     * @var string
     */
    public $SSLExpiredTime;

    /**
     * @description The status of the SSL feature. Valid values:
     *
     *   **Open**: The SSL feature is enabled.
     *   **Closed**: The SSL feature is disabled.
     *
     * @example Open
     *
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
