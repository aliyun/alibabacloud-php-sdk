<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDomainByCertificateRequest extends Model
{
    /**
     * @description The public key of the SSL certificate. You must encode the public key in Base64 before you invoke the encodeURIComponent function to encode a URI component.
     *
     * A public key in the Privacy Enhanced Mail (PEM) format is supported.
     * @example ******
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description Specifies whether to return only domain names with HTTPS enabled or disabled.
     *
     *   true: returns only domain names with HTTPS enabled.
     *   false: returns only domain names with HTTPS disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $SSLStatus;
    protected $_name = [
        'SSLPub'    => 'SSLPub',
        'SSLStatus' => 'SSLStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->SSLPub) {
            $res['SSLPub'] = $this->SSLPub;
        }
        if (null !== $this->SSLStatus) {
            $res['SSLStatus'] = $this->SSLStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnDomainByCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['SSLStatus'])) {
            $model->SSLStatus = $map['SSLStatus'];
        }

        return $model;
    }
}
