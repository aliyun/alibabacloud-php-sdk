<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class ConfirmLogisticsRequest extends Model
{
    /**
     * @var string
     */
    public $logisticsDocuments;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $poNumber;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $prNumber;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'logisticsDocuments' => 'LogisticsDocuments',
        'poNumber'           => 'PoNumber',
        'prNumber'           => 'PrNumber',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logisticsDocuments) {
            $res['LogisticsDocuments'] = $this->logisticsDocuments;
        }
        if (null !== $this->poNumber) {
            $res['PoNumber'] = $this->poNumber;
        }
        if (null !== $this->prNumber) {
            $res['PrNumber'] = $this->prNumber;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfirmLogisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogisticsDocuments'])) {
            $model->logisticsDocuments = $map['LogisticsDocuments'];
        }
        if (isset($map['PoNumber'])) {
            $model->poNumber = $map['PoNumber'];
        }
        if (isset($map['PrNumber'])) {
            $model->prNumber = $map['PrNumber'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
