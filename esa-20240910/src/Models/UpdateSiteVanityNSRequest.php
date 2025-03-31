<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateSiteVanityNSRequest extends Model
{
    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $vanityNSList;
    protected $_name = [
        'siteId' => 'SiteId',
        'vanityNSList' => 'VanityNSList',
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

        if (null !== $this->vanityNSList) {
            $res['VanityNSList'] = $this->vanityNSList;
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

        if (isset($map['VanityNSList'])) {
            $model->vanityNSList = $map['VanityNSList'];
        }

        return $model;
    }
}
