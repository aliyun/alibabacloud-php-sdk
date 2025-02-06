<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetBusinessCategoryListResponseBody\data;

use AlibabaCloud\Dara\Model;

class businessCategoryBasicInfo extends Model
{
    /**
     * @var int
     */
    public $bid;
    /**
     * @var string
     */
    public $businessName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
