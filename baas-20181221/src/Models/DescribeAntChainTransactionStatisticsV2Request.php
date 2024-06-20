<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainTransactionStatisticsV2Request extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8bd720bde18c4b37b0f4a1c7834db163
     *
     * @var string
     */
    public $antChainId;

    /**
     * @example M8GaMEyX
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 1609776000000
     *
     * @var int
     */
    public $end;

    /**
     * @example 1609084800000
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'antChainId'   => 'AntChainId',
        'consortiumId' => 'ConsortiumId',
        'end'          => 'End',
        'start'        => 'Start',
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
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
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
     * @return DescribeAntChainTransactionStatisticsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
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
