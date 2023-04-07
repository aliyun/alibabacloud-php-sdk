<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\baggageItem;

use AlibabaCloud\Tea\Model;

class tips extends Model
{
    /**
     * @example https://gw.alicdn.com/imgextra/i1/O1CN019zl3WZ22fNLxzx2cR_!!6000000007147-2-tps-125-45.png
     *
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $tipsDesc;

    /**
     * @example https://gw.alicdn.com/imgextra/i3/O1CN01rJxjw61f3bXNHAmlk_!!6000000003951-2-tps-1050-675.png
     *
     * @var string
     */
    public $tipsImage;
    protected $_name = [
        'logo'      => 'logo',
        'tipsDesc'  => 'tips_desc',
        'tipsImage' => 'tips_image',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return tips
     */
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
