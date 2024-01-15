<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\businessCategories;

use AlibabaCloud\Tea\Model;

class businessCategoryBasicInfo extends Model
{
    /**
     * @example 264971810
     *
     * @var int
     */
    public $bid;

    /**
     * @var string
     */
    public $businessName;

    /**
     * @example 1
     *
     * @var int
     */
    public $serviceType;
    protected $_name = [
        'bid'          => 'Bid',
        'businessName' => 'BusinessName',
        'serviceType'  => 'ServiceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessCategoryBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }

        return $model;
    }
}
