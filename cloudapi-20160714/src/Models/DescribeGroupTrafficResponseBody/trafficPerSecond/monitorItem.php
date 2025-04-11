<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeGroupTrafficResponseBody\trafficPerSecond;

use AlibabaCloud\Dara\Model;

class monitorItem extends Model
{
    /**
     * @var string
     */
    public $item;

    /**
     * @var string
     */
    public $itemTime;

    /**
     * @var string
     */
    public $itemValue;
    protected $_name = [
        'item' => 'Item',
        'itemTime' => 'ItemTime',
        'itemValue' => 'ItemValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }

        if (null !== $this->itemTime) {
            $res['ItemTime'] = $this->itemTime;
        }

        if (null !== $this->itemValue) {
            $res['ItemValue'] = $this->itemValue;
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
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }

        if (isset($map['ItemTime'])) {
            $model->itemTime = $map['ItemTime'];
        }

        if (isset($map['ItemValue'])) {
            $model->itemValue = $map['ItemValue'];
        }

        return $model;
    }
}
