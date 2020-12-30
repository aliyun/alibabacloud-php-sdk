<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20190306\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    /**
     * @var string[]
     */
    public $regionCode;
    protected $_name = [
        'regionCode' => 'RegionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionCode) {
            $res['RegionCode'] = $this->regionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionCode'])) {
            if (!empty($map['RegionCode'])) {
                $model->regionCode = $map['RegionCode'];
            }
        }

        return $model;
    }
}
