<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListResponseBody\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example Md3ZiTL888K9llXDy7890***********
     *
     * @var string
     */
    public $batchCode;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example 1620634297000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $successNum;

    /**
     * @example 20
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'batchCode'   => 'BatchCode',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'status'      => 'Status',
        'successNum'  => 'SuccessNum',
        'total'       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchCode) {
            $res['BatchCode'] = $this->batchCode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successNum) {
            $res['SuccessNum'] = $this->successNum;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchCode'])) {
            $model->batchCode = $map['BatchCode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessNum'])) {
            $model->successNum = $map['SuccessNum'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
