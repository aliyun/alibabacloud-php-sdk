<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateCdnCertificateSigningRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $pubMd5;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $commonName;
    protected $_name = [
        'pubMd5'     => 'PubMd5',
        'csr'        => 'Csr',
        'requestId'  => 'RequestId',
        'commonName' => 'CommonName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pubMd5) {
            $res['PubMd5'] = $this->pubMd5;
        }
        if (null !== $this->csr) {
            $res['Csr'] = $this->csr;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
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
        if (isset($map['PubMd5'])) {
            $model->pubMd5 = $map['PubMd5'];
        }
        if (isset($map['Csr'])) {
            $model->csr = $map['Csr'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        return $model;
    }
}
