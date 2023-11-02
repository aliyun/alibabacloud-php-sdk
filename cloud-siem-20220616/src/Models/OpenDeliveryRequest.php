<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class OpenDeliveryRequest extends Model
{
    /**
     * @example cloud_siem_cfw_flow
     *
     * @var string
     */
    public $logCode;

    /**
     * @example cfw
     *
     * @var string
     */
    public $productCode;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logCode'     => 'LogCode',
        'productCode' => 'ProductCode',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenDeliveryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
