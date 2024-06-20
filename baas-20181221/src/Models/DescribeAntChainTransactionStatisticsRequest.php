<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainTransactionStatisticsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pYogqb9v
     *
     * @var string
     */
    public $antChainId;

    /**
     * @description This parameter is required.
     *
     * @example 1563897600000
     *
     * @var int
     */
    public $end;

    /**
     * @description This parameter is required.
     *
     * @example 1563206400000
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'antChainId' => 'AntChainId',
        'end'        => 'End',
        'start'      => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainTransactionStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
