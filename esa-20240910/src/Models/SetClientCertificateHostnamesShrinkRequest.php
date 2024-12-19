<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class SetClientCertificateHostnamesShrinkRequest extends Model
{
    /**
     * @description The domain names to associate.
     *
     * This parameter is required.
     * @var string
     */
    public $hostnamesShrink;

    /**
     * @description The ID of the client CA certificate.
     *
     * @example babab9db65ee5efcca9f3d41d4b50d66
     *
     * @var string
     */
    public $id;

    /**
     * @description The website ID.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'hostnamesShrink' => 'Hostnames',
        'id'              => 'Id',
        'siteId'          => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostnamesShrink) {
            $res['Hostnames'] = $this->hostnamesShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClientCertificateHostnamesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostnames'])) {
            $model->hostnamesShrink = $map['Hostnames'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
