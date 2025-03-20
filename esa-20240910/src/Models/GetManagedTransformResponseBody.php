<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetManagedTransformResponseBody extends Model
{
    /**
     * @description Add visitor geolocation header. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $addClientGeolocationHeader;

    /**
     * @description Add the "ali-real-client-ip" header containing the real client IP. Value range:
     * - on: Enable.
     * - off: Disable.
     *
     * @example on
     *
     * @var string
     */
    public $addRealClientIpHeader;

    /**
     * @description Request ID.
     *
     * @example 04F0F334-1335-436C-A1D7-6C044FE73368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The version number of the site. For sites with version management enabled, this parameter can be used to specify the site version for which the configuration takes effect, defaulting to version 0.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'addClientGeolocationHeader' => 'AddClientGeolocationHeader',
        'addRealClientIpHeader' => 'AddRealClientIpHeader',
        'requestId' => 'RequestId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addClientGeolocationHeader) {
            $res['AddClientGeolocationHeader'] = $this->addClientGeolocationHeader;
        }
        if (null !== $this->addRealClientIpHeader) {
            $res['AddRealClientIpHeader'] = $this->addRealClientIpHeader;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetManagedTransformResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddClientGeolocationHeader'])) {
            $model->addClientGeolocationHeader = $map['AddClientGeolocationHeader'];
        }
        if (isset($map['AddRealClientIpHeader'])) {
            $model->addRealClientIpHeader = $map['AddRealClientIpHeader'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
