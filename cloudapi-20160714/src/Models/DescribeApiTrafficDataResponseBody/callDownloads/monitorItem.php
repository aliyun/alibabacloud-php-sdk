<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiTrafficDataResponseBody\callDownloads;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @description auditing
     *
     * @example 2016-07-28T08:20:00Z
     *
     * @var string
     */
    public $itemTime;

    /**
     * @description The time of the monitoring metric. The time format follows the ISO 8601 standard and UTC time is used. Format: YYYY-MM-DDThh:mm:ssZ
     *
     * @example 0
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
