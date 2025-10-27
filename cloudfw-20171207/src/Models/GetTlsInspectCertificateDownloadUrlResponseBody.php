<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class GetTlsInspectCertificateDownloadUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $caCertId;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'caCertId' => 'CaCertId',
        'downloadUrl' => 'DownloadUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->caCertId) {
            $res['CaCertId'] = $this->caCertId;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
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
        if (isset($map['CaCertId'])) {
            $model->caCertId = $map['CaCertId'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
