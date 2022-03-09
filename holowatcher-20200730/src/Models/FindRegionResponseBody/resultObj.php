<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\FindRegionResponseBody;

use AlibabaCloud\Tea\Model;

class resultObj extends Model
{
    /**
     * @var mixed[][]
     */
    public $regionList;
    protected $_name = [
        'regionList' => 'RegionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionList) {
            $res['RegionList'] = $this->regionList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObj
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = $map['RegionList'];
            }
        }

        return $model;
    }
}
