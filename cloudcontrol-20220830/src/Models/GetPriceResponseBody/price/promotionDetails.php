<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetPriceResponseBody\price;

use AlibabaCloud\Tea\Model;

class promotionDetails extends Model
{
    /**
     * @example 37284
     *
     * @var string
     */
    public $promotionDesc;

    /**
     * @var int
     */
    public $promotionId;

    /**
     * @var string
     */
    public $promotionName;
    protected $_name = [
        'promotionDesc' => 'promotionDesc',
        'promotionId'   => 'promotionId',
        'promotionName' => 'promotionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->promotionDesc) {
            $res['promotionDesc'] = $this->promotionDesc;
        }
        if (null !== $this->promotionId) {
            $res['promotionId'] = $this->promotionId;
        }
        if (null !== $this->promotionName) {
            $res['promotionName'] = $this->promotionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return promotionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['promotionDesc'])) {
            $model->promotionDesc = $map['promotionDesc'];
        }
        if (isset($map['promotionId'])) {
            $model->promotionId = $map['promotionId'];
        }
        if (isset($map['promotionName'])) {
            $model->promotionName = $map['promotionName'];
        }

        return $model;
    }
}
