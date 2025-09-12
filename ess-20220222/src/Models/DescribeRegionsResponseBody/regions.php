<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var bool
     */
    public $classicUnavailable;

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
     * @var bool
     */
    public $vpcUnavailable;
    protected $_name = [
        'classicUnavailable' => 'ClassicUnavailable',
        'localName' => 'LocalName',
        'regionEndpoint' => 'RegionEndpoint',
        'regionId' => 'RegionId',
        'vpcUnavailable' => 'VpcUnavailable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classicUnavailable) {
            $res['ClassicUnavailable'] = $this->classicUnavailable;
        }

        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }

        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->vpcUnavailable) {
            $res['VpcUnavailable'] = $this->vpcUnavailable;
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
        if (isset($map['ClassicUnavailable'])) {
            $model->classicUnavailable = $map['ClassicUnavailable'];
        }

        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }

        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['VpcUnavailable'])) {
            $model->vpcUnavailable = $map['VpcUnavailable'];
        }

        return $model;
    }
}
