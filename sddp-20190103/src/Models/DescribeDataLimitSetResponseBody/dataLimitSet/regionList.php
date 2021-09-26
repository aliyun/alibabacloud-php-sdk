<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $localName;
    protected $_name = [
        'regionId'  => 'RegionId',
        'localName' => 'LocalName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        return $model;
    }
}
