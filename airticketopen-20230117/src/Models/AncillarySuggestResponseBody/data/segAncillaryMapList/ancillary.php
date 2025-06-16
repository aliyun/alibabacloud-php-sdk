<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\AncillarySuggestResponseBody\data\segAncillaryMapList\ancillary\baggageAncillary;

class ancillary extends Model
{
    /**
     * @var string
     */
    public $ancillaryId;

    /**
     * @var int
     */
    public $ancillaryType;

    /**
     * @var baggageAncillary
     */
    public $baggageAncillary;
    protected $_name = [
        'ancillaryId' => 'ancillary_id',
        'ancillaryType' => 'ancillary_type',
        'baggageAncillary' => 'baggage_ancillary',
    ];

    public function validate()
    {
        if (null !== $this->baggageAncillary) {
            $this->baggageAncillary->validate();
        }
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

        if (null !== $this->baggageAncillary) {
            $res['baggage_ancillary'] = null !== $this->baggageAncillary ? $this->baggageAncillary->toArray($noStream) : $this->baggageAncillary;
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

        if (isset($map['baggage_ancillary'])) {
            $model->baggageAncillary = baggageAncillary::fromMap($map['baggage_ancillary']);
        }

        return $model;
    }
}
