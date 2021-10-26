<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponseBody\callFails;

use AlibabaCloud\Tea\Model;

class monitorItem extends Model
{
    /**
     * @var string
     */
    public $itemValue;

    /**
     * @var string
     */
    public $itemTime;
    protected $_name = [
        'itemValue' => 'ItemValue',
        'itemTime'  => 'ItemTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
        }
        if (null !== $this->itemTime) {
            $res['ItemTime'] = $this->itemTime;
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
        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }
        if (isset($map['ItemTime'])) {
            $model->itemTime = $map['ItemTime'];
        }

        return $model;
    }
}
