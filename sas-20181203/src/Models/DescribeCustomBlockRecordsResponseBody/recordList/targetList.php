<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomBlockRecordsResponseBody\recordList;

use AlibabaCloud\Tea\Model;

class targetList extends Model
{
    /**
     * @description The ID of the destination asset.
     *
     * @example 032b618f-b220-4a0d-bd37-fbdc6*******
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of the query. Valid values:
     *
     *   Set the value to **uuid**.
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
