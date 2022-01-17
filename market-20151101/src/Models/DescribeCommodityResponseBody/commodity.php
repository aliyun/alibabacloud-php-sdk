<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeCommodityResponseBody;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $commoditySpecs;

    /**
     * @var string
     */
    public $properties;
    protected $_name = [
        'applicationId'  => 'ApplicationId',
        'commodityId'    => 'CommodityId',
        'commoditySpecs' => 'CommoditySpecs',
        'properties'     => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }
        if (null !== $this->commoditySpecs) {
            $res['CommoditySpecs'] = $this->commoditySpecs;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }
        if (isset($map['CommoditySpecs'])) {
            $model->commoditySpecs = $map['CommoditySpecs'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
