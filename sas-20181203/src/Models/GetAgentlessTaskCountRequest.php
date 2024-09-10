<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetAgentlessTaskCountRequest extends Model
{
    /**
     * @description The instance ID of the asset.
     *
     * @example s-m5edddcwq7d57d******
     *
     * @var string
     */
    public $target;

    /**
     * @description Specifies the type of the object being inspected. Valid values:
     *
     *   **3**: User Snapshot.
     *   **4**: User Image.
     *
     * @example 3
     *
     * @var int
     */
    public $targetType;
    protected $_name = [
        'target'     => 'Target',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return GetAgentlessTaskCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
