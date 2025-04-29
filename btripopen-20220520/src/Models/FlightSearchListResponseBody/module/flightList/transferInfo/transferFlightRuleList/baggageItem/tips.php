<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList\baggageItem;

use AlibabaCloud\Dara\Model;

class tips extends Model
{
    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $tipsDesc;

    /**
     * @var string
     */
    public $tipsImage;
    protected $_name = [
        'logo' => 'logo',
        'tipsDesc' => 'tips_desc',
        'tipsImage' => 'tips_image',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logo) {
            $res['logo'] = $this->logo;
        }

        if (null !== $this->tipsDesc) {
            $res['tips_desc'] = $this->tipsDesc;
        }

        if (null !== $this->tipsImage) {
            $res['tips_image'] = $this->tipsImage;
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
        if (isset($map['logo'])) {
            $model->logo = $map['logo'];
        }

        if (isset($map['tips_desc'])) {
            $model->tipsDesc = $map['tips_desc'];
        }

        if (isset($map['tips_image'])) {
            $model->tipsImage = $map['tips_image'];
        }

        return $model;
    }
}
