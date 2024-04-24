<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks;

use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\GetJobResponseBody\jobInfo\tasks\executorPolicy\arraySpec;
use AlibabaCloud\Tea\Model;

class executorPolicy extends Model
{
    /**
     * @var arraySpec
     */
    public $arraySpec;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'arraySpec' => 'ArraySpec',
        'maxCount'  => 'MaxCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arraySpec) {
            $res['ArraySpec'] = null !== $this->arraySpec ? $this->arraySpec->toMap() : null;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executorPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArraySpec'])) {
            $model->arraySpec = arraySpec::fromMap($map['ArraySpec']);
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        return $model;
    }
}
