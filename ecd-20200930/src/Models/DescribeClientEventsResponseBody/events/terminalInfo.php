<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeClientEventsResponseBody\events;

use AlibabaCloud\Tea\Model;

class terminalInfo extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $serialNumber;
    protected $_name = [
        'model' => 'Model',
        'productName' => 'ProductName',
        'serialNumber' => 'SerialNumber',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terminalInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        return $model;
    }
}
