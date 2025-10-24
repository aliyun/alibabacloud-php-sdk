<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVerifyContentResponseBody\dnsContent;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeVerifyContentResponseBody\fileContent;

class DescribeVerifyContentResponseBody extends Model
{
    /**
     * @var dnsContent
     */
    public $dnsContent;

    /**
     * @var fileContent
     */
    public $fileContent;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $verifyResult;
    protected $_name = [
        'dnsContent' => 'DnsContent',
        'fileContent' => 'FileContent',
        'requestId' => 'RequestId',
        'verifyResult' => 'VerifyResult',
    ];

    public function validate()
    {
        if (null !== $this->dnsContent) {
            $this->dnsContent->validate();
        }
        if (null !== $this->fileContent) {
            $this->fileContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnsContent) {
            $res['DnsContent'] = null !== $this->dnsContent ? $this->dnsContent->toArray($noStream) : $this->dnsContent;
        }

        if (null !== $this->fileContent) {
            $res['FileContent'] = null !== $this->fileContent ? $this->fileContent->toArray($noStream) : $this->fileContent;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
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
        if (isset($map['DnsContent'])) {
            $model->dnsContent = dnsContent::fromMap($map['DnsContent']);
        }

        if (isset($map['FileContent'])) {
            $model->fileContent = fileContent::fromMap($map['FileContent']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }

        return $model;
    }
}
