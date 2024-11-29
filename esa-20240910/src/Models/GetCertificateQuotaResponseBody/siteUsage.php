<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateQuotaResponseBody;

use AlibabaCloud\Tea\Model;

class siteUsage extends Model
{
    /**
     * @example 165929521496928
     *
     * @var string
     */
    public $siteId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @example 5
     *
     * @var int
     */
    public $siteUsage;
    protected $_name = [
        'siteId'    => 'SiteId',
        'siteName'  => 'SiteName',
        'siteUsage' => 'SiteUsage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = $this->siteUsage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return siteUsage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['SiteUsage'])) {
            $model->siteUsage = $map['SiteUsage'];
        }

        return $model;
    }
}
