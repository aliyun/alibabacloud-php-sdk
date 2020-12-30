<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandPrecheckResponseBody\resultModule\bandOfferList;

use AlibabaCloud\Tea\Model;

class bandOfferList extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var int
     */
    public $offerId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var int
     */
    public $duration;
    protected $_name = [
        'direction' => 'Direction',
        'offerId'   => 'OfferId',
        'bandwidth' => 'Bandwidth',
        'duration'  => 'Duration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->offerId) {
            $res['OfferId'] = $this->offerId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandOfferList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['OfferId'])) {
            $model->offerId = $map['OfferId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        return $model;
    }
}
