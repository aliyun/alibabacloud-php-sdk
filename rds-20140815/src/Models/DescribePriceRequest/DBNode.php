<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribePriceRequest;

use AlibabaCloud\Tea\Model;

class DBNode extends Model
{
    /**
     * @description The specification of the node.
     *
     * @example mysql.n2.small.xc
     *
     * @var string
     */
    public $classCode;

    /**
     * @description The zone ID of the node.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'classCode' => 'ClassCode',
        'zoneId'    => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classCode) {
            $res['ClassCode'] = $this->classCode;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassCode'])) {
            $model->classCode = $map['ClassCode'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
