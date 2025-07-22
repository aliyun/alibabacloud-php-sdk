<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\DescribeUserSpnSummaryInfoResponseBody;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @var string
     */
    public $regionCode;

    /**
     * @var string
     */
    public $regionName;
    protected $_name = [
        'regionCode' => 'RegionCode',
        'regionName' => 'RegionName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionCode'])) {
            $model->regionCode = $map['RegionCode'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }

        return $model;
    }
}
