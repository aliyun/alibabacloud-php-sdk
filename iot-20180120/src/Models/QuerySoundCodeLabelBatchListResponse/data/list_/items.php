<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySoundCodeLabelBatchListResponse\data\list_;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $batchCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $successNum;

    /**
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
        Model::validateRequired('batchCode', $this->batchCode, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('successNum', $this->successNum, true);
        Model::validateRequired('total', $this->total, true);
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
