<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class VideoDRMLicenseRequest extends Model
{
    /**
     * @description The type of DRM encryption.
     *
     * Valid values:
     *
     *   fairplay
     *   widevine
     *
     * This parameter is required.
     *
     * @example widevine
     *
     * @var string
     */
    public $drmType;

    /**
     * @description The request that is initiated to obtain the license.
     *
     * @example CAES6B8SQgpACioSENGxDhqCLIVwwCBOyPayyWoSENGxDhqCLIVwwCBOyPayyWpI88aJmwYQARoQdRV32
     *
     * @var string
     */
    public $licenseRequest;
    protected $_name = [
        'drmType' => 'drmType',
        'licenseRequest' => 'licenseRequest',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->drmType) {
            $res['drmType'] = $this->drmType;
        }
        if (null !== $this->licenseRequest) {
            $res['licenseRequest'] = $this->licenseRequest;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VideoDRMLicenseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['drmType'])) {
            $model->drmType = $map['drmType'];
        }
        if (isset($map['licenseRequest'])) {
            $model->licenseRequest = $map['licenseRequest'];
        }

        return $model;
    }
}
