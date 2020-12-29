<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SendCustomIncidentsRequest extends Model
{
    /**
     * @var string
     */
    public $incidents;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var string
     */
    public $productType;
    protected $_name = [
        'incidents'   => 'Incidents',
        'regionId'    => 'RegionId',
        'proxyUserId' => 'ProxyUserId',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidents) {
            $res['Incidents'] = $this->incidents;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomIncidentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Incidents'])) {
            $model->incidents = $map['Incidents'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
