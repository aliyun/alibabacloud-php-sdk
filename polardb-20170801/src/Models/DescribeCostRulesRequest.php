<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class DescribeCostRulesRequest extends Model
{
    /**
     * @var string
     */
    public $effectiveTargetType;

    /**
     * @var string
     */
    public $effectiveTargetValue;

    /**
     * @var string
     */
    public $gwClusterId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelServiceId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'effectiveTargetType' => 'EffectiveTargetType',
        'effectiveTargetValue' => 'EffectiveTargetValue',
        'gwClusterId' => 'GwClusterId',
        'modelName' => 'ModelName',
        'modelServiceId' => 'ModelServiceId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveTargetType) {
            $res['EffectiveTargetType'] = $this->effectiveTargetType;
        }

        if (null !== $this->effectiveTargetValue) {
            $res['EffectiveTargetValue'] = $this->effectiveTargetValue;
        }

        if (null !== $this->gwClusterId) {
            $res['GwClusterId'] = $this->gwClusterId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->modelServiceId) {
            $res['ModelServiceId'] = $this->modelServiceId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['EffectiveTargetType'])) {
            $model->effectiveTargetType = $map['EffectiveTargetType'];
        }

        if (isset($map['EffectiveTargetValue'])) {
            $model->effectiveTargetValue = $map['EffectiveTargetValue'];
        }

        if (isset($map['GwClusterId'])) {
            $model->gwClusterId = $map['GwClusterId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['ModelServiceId'])) {
            $model->modelServiceId = $map['ModelServiceId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
