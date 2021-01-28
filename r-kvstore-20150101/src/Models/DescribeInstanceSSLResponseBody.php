<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $SSLExpiredTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $SSLEnabled;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $certCommonName;
    protected $_name = [
        'SSLExpiredTime' => 'SSLExpiredTime',
        'requestId'      => 'RequestId',
        'SSLEnabled'     => 'SSLEnabled',
        'instanceId'     => 'InstanceId',
        'certCommonName' => 'CertCommonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLExpiredTime) {
            $res['SSLExpiredTime'] = $this->SSLExpiredTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->SSLEnabled) {
            $res['SSLEnabled'] = $this->SSLEnabled;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->certCommonName) {
            $res['CertCommonName'] = $this->certCommonName;
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
        if (isset($map['SSLExpiredTime'])) {
            $model->SSLExpiredTime = $map['SSLExpiredTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SSLEnabled'])) {
            $model->SSLEnabled = $map['SSLEnabled'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CertCommonName'])) {
            $model->certCommonName = $map['CertCommonName'];
        }

        return $model;
    }
}
