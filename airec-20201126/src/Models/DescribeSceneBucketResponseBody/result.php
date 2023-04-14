<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DescribeSceneBucketResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $detail;

    /**
     * @example 1
     *
     * @var string
     */
    public $inUse;

    /**
     * @example 2
     *
     * @var int
     */
    public $num;
    protected $_name = [
        'detail' => 'detail',
        'inUse'  => 'inUse',
        'num'    => 'num',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['detail'] = $this->detail;
        }
        if (null !== $this->inUse) {
            $res['inUse'] = $this->inUse;
        }
        if (null !== $this->num) {
            $res['num'] = $this->num;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['detail'])) {
            $model->detail = $map['detail'];
        }
        if (isset($map['inUse'])) {
            $model->inUse = $map['inUse'];
        }
        if (isset($map['num'])) {
            $model->num = $map['num'];
        }

        return $model;
    }
}
