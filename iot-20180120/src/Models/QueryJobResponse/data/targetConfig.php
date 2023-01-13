<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponse\data\targetConfig\targetDevices;
use AlibabaCloud\Tea\Model;

class targetConfig extends Model
{
    /**
     * @var string
     */
    public $targetGroup;

    /**
     * @var string
     */
    public $targetProduct;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var targetDevices
     */
    public $targetDevices;
    protected $_name = [
        'targetGroup'   => 'TargetGroup',
        'targetProduct' => 'TargetProduct',
        'targetType'    => 'TargetType',
        'targetDevices' => 'TargetDevices',
    ];

    public function validate()
    {
        Model::validateRequired('targetGroup', $this->targetGroup, true);
        Model::validateRequired('targetProduct', $this->targetProduct, true);
        Model::validateRequired('targetType', $this->targetType, true);
        Model::validateRequired('targetDevices', $this->targetDevices, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetGroup) {
            $res['TargetGroup'] = $this->targetGroup;
        }
        if (null !== $this->targetProduct) {
            $res['TargetProduct'] = $this->targetProduct;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetDevices) {
            $res['TargetDevices'] = null !== $this->targetDevices ? $this->targetDevices->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetGroup'])) {
            $model->targetGroup = $map['TargetGroup'];
        }
        if (isset($map['TargetProduct'])) {
            $model->targetProduct = $map['TargetProduct'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetDevices'])) {
            $model->targetDevices = targetDevices::fromMap($map['TargetDevices']);
        }

        return $model;
    }
}
