<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody\data;

use AlibabaCloud\Tea\Model;

class businessCategoryBasicInfo extends Model
{
    /**
     * @var string
     */
    public $businessName;

    /**
     * @var int
     */
    public $serviceType;

    /**
     * @var int
     */
    public $bid;
    protected $_name = [
        'businessName' => 'BusinessName',
        'serviceType'  => 'ServiceType',
        'bid'          => 'Bid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessName) {
            $res['BusinessName'] = $this->businessName;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->bid) {
            $res['Bid'] = $this->bid;
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
        if (isset($map['BusinessName'])) {
            $model->businessName = $map['BusinessName'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['Bid'])) {
            $model->bid = $map['Bid'];
        }

        return $model;
    }
}
