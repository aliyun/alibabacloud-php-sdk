<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateSiteVanityNSRequest extends Model
{
    /**
     * @description The website ID. You can call the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation to obtain the ID.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The custom nameserver names. You can specify two to five custom nameserver names. Separate multiple names with commas (,).
     *
     * @example ns1.example.com,ns2.example.com
     *
     * @var string
     */
    public $vanityNSList;
    protected $_name = [
        'siteId'       => 'SiteId',
        'vanityNSList' => 'VanityNSList',
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
        if (null !== $this->vanityNSList) {
            $res['VanityNSList'] = $this->vanityNSList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSiteVanityNSRequest
     */
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
