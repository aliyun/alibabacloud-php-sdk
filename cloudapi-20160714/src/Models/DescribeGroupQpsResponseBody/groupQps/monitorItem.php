<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupQpsResponseBody\groupQps;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description The time.
     *
     * @example 2023-08-02T09:15:00Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The number of requests that fall into the time range.
     *
     * @example 17
     *
     * @var string
     */
    public $itemValue;
    protected $_name = [
        'itemTime'  => 'ItemTime',
        'itemValue' => 'ItemValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemTime) {
            $res['ItemTime'] = $this->itemTime;
        }
        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ItemTime'])) {
            $model->itemTime = $map['ItemTime'];
        }
        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }

        return $model;
    }
}
