<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceRequest\haResourceSpec;
use AlibabaCloud\SDK\Foasconsole\V20211028\Models\QueryModifyInstancePriceRequest\resourceSpec;
use AlibabaCloud\Tea\Model;

class QueryModifyInstancePriceRequest extends Model
{
    /**
     * @var bool
     */
    public $ha;

    /**
     * @var haResourceSpec
     */
    public $haResourceSpec;

    /**
     * @var string[]
     */
    public $haVSwitchIds;

    /**
     * @var string
     */
    public $haZoneId;

    /**
     * @example f-cn-wwo36qj4g06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var resourceSpec
     */
    public $resourceSpec;
    protected $_name = [
        'ha'             => 'Ha',
        'haResourceSpec' => 'HaResourceSpec',
        'haVSwitchIds'   => 'HaVSwitchIds',
        'haZoneId'       => 'HaZoneId',
        'instanceId'     => 'InstanceId',
        'region'         => 'Region',
        'resourceSpec'   => 'ResourceSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ha) {
            $res['Ha'] = $this->ha;
        }
        if (null !== $this->haResourceSpec) {
            $res['HaResourceSpec'] = null !== $this->haResourceSpec ? $this->haResourceSpec->toMap() : null;
        }
        if (null !== $this->haVSwitchIds) {
            $res['HaVSwitchIds'] = $this->haVSwitchIds;
        }
        if (null !== $this->haZoneId) {
            $res['HaZoneId'] = $this->haZoneId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryModifyInstancePriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }
        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpec = haResourceSpec::fromMap($map['HaResourceSpec']);
        }
        if (isset($map['HaVSwitchIds'])) {
            if (!empty($map['HaVSwitchIds'])) {
                $model->haVSwitchIds = $map['HaVSwitchIds'];
            }
        }
        if (isset($map['HaZoneId'])) {
            $model->haZoneId = $map['HaZoneId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }

        return $model;
    }
}
