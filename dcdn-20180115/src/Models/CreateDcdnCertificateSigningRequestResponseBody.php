<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;

class CreateDcdnCertificateSigningRequestResponseBody extends Model
{
    /**
     * @var string
     */
    public $commonName;

    /**
     * @var string
     */
    public $csr;

    /**
     * @var string
     */
    public $pubMd5;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commonName' => 'CommonName',
        'csr' => 'Csr',
        'pubMd5' => 'PubMd5',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
