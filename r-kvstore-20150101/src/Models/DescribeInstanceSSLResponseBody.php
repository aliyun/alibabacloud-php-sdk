<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSSLResponseBody extends Model
{
    /**
     * @description The common name of the CA certificate. The default value is the internal endpoint of the instance.
     *
     * @example r-bp1zxszhcgatnx****.redis.rds.aliyuncs.com
     *
     * @var string
     */
    public $certCommonName;

    /**
     * @description The download URL of the CA certificate.
     *
     * @example https://apsaradb-public.oss-ap-sout****-1.aliy****.com/ApsaraDB-CA-Chain.zip
     *
     * @var string
     */
    public $certDownloadURL;

    /**
     * @description The ID of the instance.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 02260F96-913E-4655-9BA5-A3651CAF****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the TLS (SSL) encryption feature. Valid values:
     *
     *   **Enable**: SSL encryption is enabled.
     *   **Disable**: SSL encryption is disabled.
     *
     * @example Enable
     *
     * @var string
     */
    public $SSLEnabled;

    /**
     * @description The time when the CA certificate expires.
     *
     * @example 2020-08-05T09:05:53Z
     *
     * @var string
     */
    public $SSLExpiredTime;
    protected $_name = [
        'certCommonName'  => 'CertCommonName',
        'certDownloadURL' => 'CertDownloadURL',
        'instanceId'      => 'InstanceId',
        'requestId'       => 'RequestId',
        'SSLEnabled'      => 'SSLEnabled',
        'SSLExpiredTime'  => 'SSLExpiredTime',
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
        if (null !== $this->certDownloadURL) {
            $res['CertDownloadURL'] = $this->certDownloadURL;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceSSLResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }
        if (isset($map['CertDownloadURL'])) {
            $model->certDownloadURL = $map['CertDownloadURL'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }

        return $model;
    }
}
