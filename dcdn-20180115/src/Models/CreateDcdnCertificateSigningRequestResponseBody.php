<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class CreateDcdnCertificateSigningRequestResponseBody extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $commonName;

    /**
     * @example -----BEGIN CERTIFICATE REQUEST-----\nMIIC/zCCAecCAQAwZTELMAkGA1UEBhMCQ04xCzAJBgNVBAgTAlpKMQswCQYDVQQH
     *
     * @var string
     */
    public $csr;

    /**
     * @example 629bf4fd8104eda171135bcb0f77a10b
     *
     * @var string
     */
    public $pubMd5;

    /**
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commonName' => 'CommonName',
        'csr'        => 'Csr',
        'pubMd5'     => 'PubMd5',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->pubMd5) {
            $res['PubMd5'] = $this->pubMd5;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDcdnCertificateSigningRequestResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['PubMd5'])) {
            $model->pubMd5 = $map['PubMd5'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
