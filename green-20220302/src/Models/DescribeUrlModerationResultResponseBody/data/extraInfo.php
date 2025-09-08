<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $icpNo;

    /**
     * @var string
     */
    public $icpType;

    /**
     * @var string
     */
    public $siteType;
    protected $_name = [
        'icpNo' => 'IcpNo',
        'icpType' => 'IcpType',
        'siteType' => 'SiteType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
