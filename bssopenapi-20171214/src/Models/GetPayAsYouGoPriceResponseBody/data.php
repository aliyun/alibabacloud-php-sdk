<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data\moduleDetails;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\GetPayAsYouGoPriceResponseBody\data\promotionDetails;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $currency;

    /**
     * @var moduleDetails
     */
    public $moduleDetails;

    /**
     * @var promotionDetails
     */
    public $promotionDetails;
    protected $_name = [
        'currency'         => 'Currency',
        'moduleDetails'    => 'ModuleDetails',
        'promotionDetails' => 'PromotionDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->moduleDetails) {
            $res['ModuleDetails'] = null !== $this->moduleDetails ? $this->moduleDetails->toMap() : null;
        }
        if (null !== $this->promotionDetails) {
            $res['PromotionDetails'] = null !== $this->promotionDetails ? $this->promotionDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['ModuleDetails'])) {
            $model->moduleDetails = moduleDetails::fromMap($map['ModuleDetails']);
        }
        if (isset($map['PromotionDetails'])) {
            $model->promotionDetails = promotionDetails::fromMap($map['PromotionDetails']);
        }

        return $model;
    }
}
