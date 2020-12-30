<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosAttackTypeChartResponseBody extends Model
{
    /**
     * @var int
     */
    public $attckCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $attckType;

    /**
     * @var int
     */
    public $dropCount;

    /**
     * @var string
     */
    public $dropType;
    protected $_name = [
        'attckCount' => 'AttckCount',
        'requestId'  => 'RequestId',
        'attckType'  => 'AttckType',
        'dropCount'  => 'DropCount',
        'dropType'   => 'DropType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attckCount) {
            $res['AttckCount'] = $this->attckCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->attckType) {
            $res['AttckType'] = $this->attckType;
        }
        if (null !== $this->dropCount) {
            $res['DropCount'] = $this->dropCount;
        }
        if (null !== $this->dropType) {
            $res['DropType'] = $this->dropType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosAttackTypeChartResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttckCount'])) {
            $model->attckCount = $map['AttckCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AttckType'])) {
            $model->attckType = $map['AttckType'];
        }
        if (isset($map['DropCount'])) {
            $model->dropCount = $map['DropCount'];
        }
        if (isset($map['DropType'])) {
            $model->dropType = $map['DropType'];
        }

        return $model;
    }
}
