<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeWebPathResponseBody\configList;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @description The object.
     *
     * @example 82048187-bb9b-4e19-8320-7b4ddb97****
     *
     * @var string
     */
    public $target;

    /**
     * @description The object type. Valid values:
     *
     *   **uuid**
     *
     * @example uuid
     *
     * @var string
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
     * @return targetList
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
