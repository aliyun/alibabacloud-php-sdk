<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class DescribeOssStockStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var int
     */
    public $stockTaskId;
    protected $_name = [
        'lang'        => 'Lang',
        'sourceIp'    => 'SourceIp',
        'stockTaskId' => 'StockTaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->stockTaskId) {
            $res['StockTaskId'] = $this->stockTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOssStockStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StockTaskId'])) {
            $model->stockTaskId = $map['StockTaskId'];
        }

        return $model;
    }
}
