<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCommonTargetConfigResponseBody;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @description The mode in which the configuration takes effect. Valid values:
     *
     *   **add**: In this mode, the configuration takes effect on the assets.
     *   **del**: In this mode, the configuration does not take effect on the assets.
     *
     * @example add
     *
     * @var string
     */
    public $flag;

    /**
     * @description The ID of the asset on which the configuration takes effect.
     *
     * >
     *
     *   When you set the **TargetType** parameter to **uuid**, the value of this parameter indicates the UUID of an asset.
     *
     *   When you set the **TargetType** parameter to **Cluster**, the value of this parameter indicates the ID of a cluster.
     *
     *   When you set the **TargetType** parameter to **image_repo**, the value of this parameter indicates the ID of an image repository.
     *
     * @example c23551de6149343e8a54e69fbefe6****
     *
     * @var string
     */
    public $target;

    /**
     * @description The dimension from on which the feature was configured. Valid values:
     *
     *   **uuid**: the UUID of the asset
     *   **Cluster**: the ID of the cluster
     *   **image_repo**: the ID of the image repository
     *
     * @example image_repo
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'flag'       => 'Flag',
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flag) {
            $res['Flag'] = $this->flag;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Flag'])) {
            $model->flag = $map['Flag'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
