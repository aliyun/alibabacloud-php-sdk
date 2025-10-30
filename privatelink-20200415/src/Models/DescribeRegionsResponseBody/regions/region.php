<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions\region\serviceResourceTypes;

class region extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var serviceResourceTypes
     */
    public $serviceResourceTypes;
    protected $_name = [
        'localName' => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
        'serviceResourceTypes' => 'ServiceResourceTypes',
    ];

    public function validate()
    {
        if (null !== $this->serviceResourceTypes) {
            $this->serviceResourceTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceResourceTypes) {
            $res['ServiceResourceTypes'] = null !== $this->serviceResourceTypes ? $this->serviceResourceTypes->toArray($noStream) : $this->serviceResourceTypes;
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
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceResourceTypes'])) {
            $model->serviceResourceTypes = serviceResourceTypes::fromMap($map['ServiceResourceTypes']);
        }

        return $model;
    }
}
