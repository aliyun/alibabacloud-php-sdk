<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCertRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $keyWord;

    /**
     * @var int
     */
    public $showSize;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $warehouseId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'keyWord'     => 'KeyWord',
        'showSize'    => 'ShowSize',
        'status'      => 'Status',
        'warehouseId' => 'WarehouseId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->keyWord) {
            $res['KeyWord'] = $this->keyWord;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warehouseId) {
            $res['WarehouseId'] = $this->warehouseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['KeyWord'])) {
            $model->keyWord = $map['KeyWord'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WarehouseId'])) {
            $model->warehouseId = $map['WarehouseId'];
        }

        return $model;
    }
}
