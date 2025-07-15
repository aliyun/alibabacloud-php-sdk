<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveDomainByCertificateRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The public key of the SSL certificate. You must Base64-encode the public key before you invoke the encodeURIComponent function to encode a URI component. The public key must be in the PEM format.
     *
     * This parameter is required.
     *
     * @example ******
     *
     * @var string
     */
    public $SSLPub;

    /**
     * @description Specifies whether to return only domain names with HTTPS enabled or disabled.
     *
     *   **true**: returns only domain names with HTTPS enabled.
     *   **false**: The rule is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $SSLStatus;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'SSLPub' => 'SSLPub',
        'SSLStatus' => 'SSLStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return DescribeLiveDomainByCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
