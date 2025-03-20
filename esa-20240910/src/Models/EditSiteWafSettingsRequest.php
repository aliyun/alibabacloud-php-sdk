<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class EditSiteWafSettingsRequest extends Model
{
    /**
     * @description The WAF configuration of the website in the JSON format.
     *
     * @var WafSiteSettings
     */
    public $settings;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * @example 1
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The version of the website.
     *
     * @example 0
     *
     * @var int
     */
    public $siteVersion;
    protected $_name = [
        'settings' => 'Settings',
        'siteId' => 'SiteId',
        'siteVersion' => 'SiteVersion',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->settings) {
            $res['Settings'] = null !== $this->settings ? $this->settings->toMap() : null;
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
     * @return EditSiteWafSettingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Settings'])) {
            $model->settings = WafSiteSettings::fromMap($map['Settings']);
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
