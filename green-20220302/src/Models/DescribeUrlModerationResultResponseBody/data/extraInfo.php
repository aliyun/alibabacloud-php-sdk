<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @description The ICP number.
     *
     * @example xx
     *
     * @var string
     */
    public $icpNo;

    /**
     * @description The type of the ICP filing.
     *
     * @example xx
     *
     * @var string
     */
    public $icpType;

    /**
     * @description The type of site
     *
     * @example game
     *
     * @var string
     */
    public $siteType;
    protected $_name = [
        'icpNo'    => 'IcpNo',
        'icpType'  => 'IcpType',
        'siteType' => 'SiteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icpNo) {
            $res['IcpNo'] = $this->icpNo;
        }
        if (null !== $this->icpType) {
            $res['IcpType'] = $this->icpType;
        }
        if (null !== $this->siteType) {
            $res['SiteType'] = $this->siteType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcpNo'])) {
            $model->icpNo = $map['IcpNo'];
        }
        if (isset($map['IcpType'])) {
            $model->icpType = $map['IcpType'];
        }
        if (isset($map['SiteType'])) {
            $model->siteType = $map['SiteType'];
        }

        return $model;
    }
}
