<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Foasconsole\V20211028\Models;

use AlibabaCloud\Tea\Model;

class QueryModifyInstancePriceShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $ha;

    /**
     * @var string
     */
    public $haResourceSpecShrink;

    /**
     * @var string
     */
    public $haVSwitchIdsShrink;

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
     * @var string
     */
    public $resourceSpecShrink;

    /**
     * @var bool
     */
    public $usePromotionCode;
    protected $_name = [
        'ha'                   => 'Ha',
        'haResourceSpecShrink' => 'HaResourceSpec',
        'haVSwitchIdsShrink'   => 'HaVSwitchIds',
        'instanceId'           => 'InstanceId',
        'promotionCode'        => 'PromotionCode',
        'region'               => 'Region',
        'resourceSpecShrink'   => 'ResourceSpec',
        'usePromotionCode'     => 'UsePromotionCode',
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
        if (null !== $this->haResourceSpecShrink) {
            $res['HaResourceSpec'] = $this->haResourceSpecShrink;
        }
        if (null !== $this->haVSwitchIdsShrink) {
            $res['HaVSwitchIds'] = $this->haVSwitchIdsShrink;
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
        if (null !== $this->resourceSpecShrink) {
            $res['ResourceSpec'] = $this->resourceSpecShrink;
        }
        if (null !== $this->usePromotionCode) {
            $res['UsePromotionCode'] = $this->usePromotionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryModifyInstancePriceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ha'])) {
            $model->ha = $map['Ha'];
        }
        if (isset($map['HaResourceSpec'])) {
            $model->haResourceSpecShrink = $map['HaResourceSpec'];
        }
        if (isset($map['HaVSwitchIds'])) {
            $model->haVSwitchIdsShrink = $map['HaVSwitchIds'];
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
            $model->resourceSpecShrink = $map['ResourceSpec'];
        }
        if (isset($map['UsePromotionCode'])) {
            $model->usePromotionCode = $map['UsePromotionCode'];
        }

        return $model;
    }
}
