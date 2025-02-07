<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListInstanceQuotasWithUsageResponseBody\quotas;

use AlibabaCloud\Dara\Model;

class siteUsage extends Model
{
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var string
     */
    public $siteName;
    /**
     * @var string
     */
    public $siteUsage;
    protected $_name = [
        'siteId'    => 'SiteId',
        'siteName'  => 'SiteName',
        'siteUsage' => 'SiteUsage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
