<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnDomainByCertificateRequest extends Model
{
    /**
     * @description Specifies whether the domain name list to return match the SSL certificate.
     *
     *   true: The domain name list match the SSL certificate.
     *   false: The domain name list do not match the SSL certificate.
     *
     * @example true
     *
     * @var bool
     */
    public $exact;

    /**
     * @description The public key of the SSL certificate. You must encode the public key in Base64 and then call the encodeURIComponent function to encode the public key again.
     *
     * The public key must be in the PEM format.
     * @example ******
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description Specifies whether the domain name list to return contains only domain names with HTTPS enabled or disabled.
     *
     *   true: The domain name list contains only domain names with HTTPS enabled.
     *   false: The domain name list contains only domain names with HTTPS disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $SSLStatus;
    protected $_name = [
        'exact'     => 'Exact',
        'SSLPub'    => 'SSLPub',
        'SSLStatus' => 'SSLStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exact) {
            $res['Exact'] = $this->exact;
        }
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
        if (isset($map['Exact'])) {
            $model->exact = $map['Exact'];
        }
        if (isset($map['SSLPub'])) {
            $model->SSLPub = $map['SSLPub'];
        }
        if (isset($map['SSLStatus'])) {
            $model->SSLStatus = $map['SSLStatus'];
        }

        return $model;
    }
}
