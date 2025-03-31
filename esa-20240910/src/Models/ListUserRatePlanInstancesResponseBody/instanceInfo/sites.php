<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListUserRatePlanInstancesResponseBody\instanceInfo;

use AlibabaCloud\Dara\Model;

class sites extends Model
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
    public $siteStatus;
    protected $_name = [
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'siteStatus' => 'SiteStatus',
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

        if (null !== $this->siteStatus) {
            $res['SiteStatus'] = $this->siteStatus;
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

        if (isset($map['SiteStatus'])) {
            $model->siteStatus = $map['SiteStatus'];
        }

        return $model;
    }
}
