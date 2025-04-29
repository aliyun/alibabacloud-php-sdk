<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ElectronicItineraryBatchApplyRequest;

use AlibabaCloud\Dara\Model;

class applyItineraryList extends Model
{
    /**
     * @var string
     */
    public $purchaserName;

    /**
     * @var string
     */
    public $purchaserTaxNo;

    /**
     * @var int
     */
    public $purchaserType;

    /**
     * @var string
     */
    public $ticketNo;
    protected $_name = [
        'purchaserName' => 'purchaser_name',
        'purchaserTaxNo' => 'purchaser_tax_no',
        'purchaserType' => 'purchaser_type',
        'ticketNo' => 'ticket_no',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
