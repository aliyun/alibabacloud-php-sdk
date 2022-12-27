<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateCdnCertificateSigningRequestResponseBody extends Model
{
    /**
     * @description The Common Name of the certificate.
     *
     * @example CommonName
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The content of the CSR.
     *
     * @example CSRName
     *
     * @var string
     */
    public $csr;

    /**
     * @description The MD5 value of the certificate public key.
     *
     * @example 629bf4fd8104eda171135bcb0f77****
     *
     * @var string
     */
    public $pubMd5;

    /**
     * @description The ID of the request.
     *
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
     * @return CreateCdnCertificateSigningRequestResponseBody
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
