<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointServiceResponseBody;

use AlibabaCloud\Dara\Model;

class supportedRegionSet extends Model
{
    /**
     * @var string
     */
    public $regionBusinessStatus;

    /**
     * @var string
     */
    public $regionServiceStatus;

    /**
     * @var string
     */
    public $serviceRegionId;
    protected $_name = [
        'regionBusinessStatus' => 'RegionBusinessStatus',
        'regionServiceStatus' => 'RegionServiceStatus',
        'serviceRegionId' => 'ServiceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionBusinessStatus) {
            $res['RegionBusinessStatus'] = $this->regionBusinessStatus;
        }

        if (null !== $this->regionServiceStatus) {
            $res['RegionServiceStatus'] = $this->regionServiceStatus;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
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
        if (isset($map['RegionBusinessStatus'])) {
            $model->regionBusinessStatus = $map['RegionBusinessStatus'];
        }

        if (isset($map['RegionServiceStatus'])) {
            $model->regionServiceStatus = $map['RegionServiceStatus'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        return $model;
    }
}
