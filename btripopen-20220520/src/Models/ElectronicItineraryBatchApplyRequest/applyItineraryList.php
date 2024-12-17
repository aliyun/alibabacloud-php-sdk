<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyRequest;

use AlibabaCloud\Tea\Model;

class applyItineraryList extends Model
{
    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @example tax3213132131
     *
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $purchaserType;

    /**
     * @description This parameter is required.
     *
     * @example 781-2205431917
     *
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'purchaserName'  => 'purchaser_name',
        'purchaserTaxNo' => 'purchaser_tax_no',
        'purchaserType'  => 'purchaser_type',
        'ticketNo'       => 'ticket_no',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->purchaserName) {
            $res['purchaser_name'] = $this->purchaserName;
        }
        if (null !== $this->purchaserTaxNo) {
            $res['purchaser_tax_no'] = $this->purchaserTaxNo;
        }
        if (null !== $this->purchaserType) {
            $res['purchaser_type'] = $this->purchaserType;
        }
        if (null !== $this->ticketNo) {
            $res['ticket_no'] = $this->ticketNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyItineraryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['purchaser_name'])) {
            $model->purchaserName = $map['purchaser_name'];
        }
        if (isset($map['purchaser_tax_no'])) {
            $model->purchaserTaxNo = $map['purchaser_tax_no'];
        }
        if (isset($map['purchaser_type'])) {
            $model->purchaserType = $map['purchaser_type'];
        }
        if (isset($map['ticket_no'])) {
            $model->ticketNo = $map['ticket_no'];
        }

        return $model;
    }
}
