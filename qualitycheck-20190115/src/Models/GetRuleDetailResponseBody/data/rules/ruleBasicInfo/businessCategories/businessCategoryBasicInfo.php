<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetRuleDetailResponseBody\data\rules\ruleBasicInfo\businessCategories;

use AlibabaCloud\Tea\Model;

class businessCategoryBasicInfo extends Model
{
    /**
     * @var int
     */
    public $bid;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var string
     */
    public $businessName;
    protected $_name = [
        'bid'          => 'Bid',
        'serviceType'  => 'ServiceType',
        'businessName' => 'BusinessName',
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
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
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
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }

        return $model;
    }
}
