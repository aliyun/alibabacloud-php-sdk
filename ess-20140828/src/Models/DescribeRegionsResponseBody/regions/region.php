<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20140828\Models\DescribeRegionsResponseBody\regions;

use AlibabaCloud\Tea\Model;

class region extends Model
{
    /**
     * @var bool
     */
    public $classicUnavailable;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var bool
     */
    public $vpcUnavailable;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'classicUnavailable' => 'ClassicUnavailable',
        'regionEndpoint'     => 'RegionEndpoint',
        'localName'          => 'LocalName',
        'vpcUnavailable'     => 'VpcUnavailable',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classicUnavailable) {
            $res['ClassicUnavailable'] = $this->classicUnavailable;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->vpcUnavailable) {
            $res['VpcUnavailable'] = $this->vpcUnavailable;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return region
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClassicUnavailable'])) {
            $model->classicUnavailable = $map['ClassicUnavailable'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['VpcUnavailable'])) {
            $model->vpcUnavailable = $map['VpcUnavailable'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
