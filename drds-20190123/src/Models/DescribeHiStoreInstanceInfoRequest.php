<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeHiStoreInstanceInfoRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $historeInstanceId;
    protected $_name = [
        'drdsInstanceId'    => 'DrdsInstanceId',
        'historeInstanceId' => 'HistoreInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->historeInstanceId) {
            $res['HistoreInstanceId'] = $this->historeInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHiStoreInstanceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['HistoreInstanceId'])) {
            $model->historeInstanceId = $map['HistoreInstanceId'];
        }

        return $model;
    }
}
