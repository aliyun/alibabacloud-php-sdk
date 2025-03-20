<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateManagedTransformRequest extends Model
{
    /**
     * @description Specifies whether to include the header that indicates the geographical location of a client in an origin request. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $addClientGeolocationHeader;

    /**
     * @description Specifies whether to include the "ali-real-client-ip" header that indicates the client\\"s real IP address in an origin request. Valid values:
     *
     *   on
     *   off
     *
     * @example on
     *
     * @var string
     */
    public $addRealClientIpHeader;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version number of the website. You can use this parameter to specify a version of your website to apply the feature settings. By default, version 0 is used.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'addClientGeolocationHeader' => 'AddClientGeolocationHeader',
        'addRealClientIpHeader' => 'AddRealClientIpHeader',
        'siteId' => 'SiteId',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteVersion) {
            $res['SiteVersion'] = $this->siteVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateManagedTransformRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteVersion'])) {
            $model->siteVersion = $map['SiteVersion'];
        }

        return $model;
    }
}
