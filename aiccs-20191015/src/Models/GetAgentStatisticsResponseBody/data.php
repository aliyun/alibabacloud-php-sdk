<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentStatisticsResponseBody;

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
     * @example {"n_resttype_1":15,"t_outcall_speak":829747,"average_incoming_time":"8451.29","n_resttype_3":0,"minute_id":"-1","n_conference_speak":0,"n_resttype_2":0,"n_resttype_5":0,"n_resttype_4":0,"n_resttype_7":0,"n_resttype_6":0,"n_resttype_9":0,"n_resttype_8":0,"n_outcall_dial":25,"total_break_time":"58555","n_internal_speak":0,"n_send_step_transfer":7,"n_consulted_internal_speak":0}
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
