<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\BookRequest\passengerAncillaryPurchaseMapList;

use AlibabaCloud\Dara\Model;

class bookAncillaryReqItem extends Model
{
    /**
     * @var string
     */
    public $ancillaryId;

    /**
     * @var int
     */
    public $ancillaryType;
    protected $_name = [
        'ancillaryId' => 'ancillary_id',
        'ancillaryType' => 'ancillary_type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ancillaryId) {
            $res['ancillary_id'] = $this->ancillaryId;
        }

        if (null !== $this->ancillaryType) {
            $res['ancillary_type'] = $this->ancillaryType;
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
        if (isset($map['ancillary_id'])) {
            $model->ancillaryId = $map['ancillary_id'];
        }

        if (isset($map['ancillary_type'])) {
            $model->ancillaryType = $map['ancillary_type'];
        }

        return $model;
    }
}
