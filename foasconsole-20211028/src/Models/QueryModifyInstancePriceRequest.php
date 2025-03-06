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
     * @description This parameter is required.
     *
     * @example f-cn-wwo36qj4g06
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $promotionCode;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description This parameter is required.
     *
     * @var resourceSpec
     */
    public $resourceSpec;

    /**
     * @var bool
     */
    public $usePromotionCode;
    protected $_name = [
        'ha'               => 'Ha',
        'haResourceSpec'   => 'HaResourceSpec',
        'haVSwitchIds'     => 'HaVSwitchIds',
        'instanceId'       => 'InstanceId',
        'promotionCode'    => 'PromotionCode',
        'region'           => 'Region',
        'resourceSpec'     => 'ResourceSpec',
        'usePromotionCode' => 'UsePromotionCode',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->promotionCode) {
            $res['PromotionCode'] = $this->promotionCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceSpec) {
            $res['ResourceSpec'] = null !== $this->resourceSpec ? $this->resourceSpec->toMap() : null;
        }
        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PromotionCode'])) {
            $model->promotionCode = $map['PromotionCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceSpec'])) {
            $model->resourceSpec = resourceSpec::fromMap($map['ResourceSpec']);
        }
        if (isset($map['UsePromotionCode'])) {
            $model->usePromotionCode = $map['UsePromotionCode'];
        }

        return $model;
    }
}
