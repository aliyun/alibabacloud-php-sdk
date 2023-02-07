<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetAgentDetailReportResponseBody;

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
     * @example {"t_wait":379322.0,"hotline_time_outcall_avg":"32.00","n_ringing":0,"t_outbound_40":0.0,"hotline_time_incall_avg":-1,"t_calldialing":0.0,"n_inbound":276,"servicer_id":"-1","call_in_sep_sat_cnt":13,"request_cnt":231,"n_not_ready_99":811,"t_work_outbound":49338.0,"hotline_rate_handle_in_60s":"96%","n_not_ready_login":811,"t_not_ready_login":0.0,"n_work_inbound":176,"}
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
