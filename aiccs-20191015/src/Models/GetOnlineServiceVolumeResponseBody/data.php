<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOnlineServiceVolumeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 2000
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example {"tenant_id":"905","online_40s_transfer_ready_cnt":109,"minute_id":"-1","wait_time_len":1215,"pickup_rate":"63.09%","thirty_seconds_to_pickUp":"2560","date_id":"-1","online_over_out_cnt":0,"online_20s_transfer_ready_cnt":109,"thirty_seconds_response_rate":"63.09%","abandonment_rate":"63.09%","service_time_len":68378,"service_pickup":"2560","hour_id":"-1","online_10s_transfer_ready_cnt":109}
     *
     * @var string
     */
    public $rows;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'pageNum'  => 'PageNum',
        'pageSize' => 'PageSize',
        'rows'     => 'Rows',
        'totalNum' => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
