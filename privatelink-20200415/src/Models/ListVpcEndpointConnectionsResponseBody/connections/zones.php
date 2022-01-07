<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody\connections;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $replacedEniId;

    /**
     * @var string
     */
    public $replacedResourceId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneDomain;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneStatus;
    protected $_name = [
        'eniId'              => 'EniId',
        'replacedEniId'      => 'ReplacedEniId',
        'replacedResourceId' => 'ReplacedResourceId',
        'resourceId'         => 'ResourceId',
        'vSwitchId'          => 'VSwitchId',
        'zoneDomain'         => 'ZoneDomain',
        'zoneId'             => 'ZoneId',
        'zoneStatus'         => 'ZoneStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->replacedEniId) {
            $res['ReplacedEniId'] = $this->replacedEniId;
        }
        if (null !== $this->replacedResourceId) {
            $res['ReplacedResourceId'] = $this->replacedResourceId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneDomain) {
            $res['ZoneDomain'] = $this->zoneDomain;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneStatus) {
            $res['ZoneStatus'] = $this->zoneStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['ReplacedEniId'])) {
            $model->replacedEniId = $map['ReplacedEniId'];
        }
        if (isset($map['ReplacedResourceId'])) {
            $model->replacedResourceId = $map['ReplacedResourceId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneDomain'])) {
            $model->zoneDomain = $map['ZoneDomain'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneStatus'])) {
            $model->zoneStatus = $map['ZoneStatus'];
        }

        return $model;
    }
}
