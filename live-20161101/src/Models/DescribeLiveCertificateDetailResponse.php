<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveCertificateDetailResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cert;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;
    protected $_name = [
        'requestId' => 'RequestId',
        'cert'      => 'Cert',
        'key'       => 'Key',
        'certId'    => 'CertId',
        'certName'  => 'CertName',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('cert', $this->cert, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('certId', $this->certId, true);
        Model::validateRequired('certName', $this->certName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCertificateDetailResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        return $model;
    }
}
