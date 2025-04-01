<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeInstanceSSLResponseBody extends Model
{
    /**
     * @var string
     */
    public $certCommonName;

    /**
     * @var string
     */
    public $certDownloadURL;

    /**
     * @var string
     */
    public $instanceId;

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
    public $SSLExpiredTime;
    protected $_name = [
        'certCommonName' => 'CertCommonName',
        'certDownloadURL' => 'CertDownloadURL',
        'instanceId' => 'InstanceId',
        'requestId' => 'RequestId',
        'SSLEnabled' => 'SSLEnabled',
        'SSLExpiredTime' => 'SSLExpiredTime',
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
