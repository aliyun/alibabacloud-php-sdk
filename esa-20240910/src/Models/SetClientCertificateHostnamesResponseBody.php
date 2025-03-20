<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class SetClientCertificateHostnamesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $hostnames;

    /**
     * @description The ID of the client CA certificate.
     *
     * @example babab9db65ee5efcca9f3d41d4b50d66
     *
     * @var string
     */
    public $id;

    /**
     * @description The request ID.
     *
     * @example ET5BF670-09D5-4D0B-BEBY-D96A2A528000
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The website ID.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;
    protected $_name = [
        'hostnames' => 'Hostnames',
        'id' => 'Id',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostnames) {
            $res['Hostnames'] = $this->hostnames;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClientCertificateHostnamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostnames'])) {
            if (!empty($map['Hostnames'])) {
                $model->hostnames = $map['Hostnames'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
