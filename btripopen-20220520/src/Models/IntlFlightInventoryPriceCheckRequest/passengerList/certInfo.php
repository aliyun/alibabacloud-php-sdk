<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\IntlFlightInventoryPriceCheckRequest\passengerList;

use AlibabaCloud\Dara\Model;

class certInfo extends Model
{
    /**
     * @var string
     */
    public $certNo;

    /**
     * @var int
     */
    public $certType;

    /**
     * @var string
     */
    public $certValidDate;

    /**
     * @var string
     */
    public $issuePlace;
    protected $_name = [
        'certNo' => 'cert_no',
        'certType' => 'cert_type',
        'certValidDate' => 'cert_valid_date',
        'issuePlace' => 'issue_place',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }

        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }

        if (null !== $this->certValidDate) {
            $res['cert_valid_date'] = $this->certValidDate;
        }

        if (null !== $this->issuePlace) {
            $res['issue_place'] = $this->issuePlace;
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
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }

        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }

        if (isset($map['cert_valid_date'])) {
            $model->certValidDate = $map['cert_valid_date'];
        }

        if (isset($map['issue_place'])) {
            $model->issuePlace = $map['issue_place'];
        }

        return $model;
    }
}
