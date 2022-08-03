<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class SelectMetaStatus extends Model
{
    /**
     * @var int
     */
    public $colsCount;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $rowsCount;

    /**
     * @var int
     */
    public $splitsCount;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $totalScannedBytes;
    protected $_name = [
        'colsCount'         => 'ColsCount',
        'errorMessage'      => 'ErrorMessage',
        'offset'            => 'Offset',
        'rowsCount'         => 'RowsCount',
        'splitsCount'       => 'SplitsCount',
        'status'            => 'Status',
        'totalScannedBytes' => 'TotalScannedBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colsCount) {
            $res['ColsCount'] = $this->colsCount;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->rowsCount) {
            $res['RowsCount'] = $this->rowsCount;
        }
        if (null !== $this->splitsCount) {
            $res['SplitsCount'] = $this->splitsCount;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalScannedBytes) {
            $res['TotalScannedBytes'] = $this->totalScannedBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SelectMetaStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColsCount'])) {
            $model->colsCount = $map['ColsCount'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['RowsCount'])) {
            $model->rowsCount = $map['RowsCount'];
        }
        if (isset($map['SplitsCount'])) {
            $model->splitsCount = $map['SplitsCount'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalScannedBytes'])) {
            $model->totalScannedBytes = $map['TotalScannedBytes'];
        }

        return $model;
    }
}
