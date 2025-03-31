<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\executorPolicy\arraySpec;

class executorPolicy extends Model
{
    /**
     * @var arraySpec
     */
    public $arraySpec;

    /**
     * @var int
     */
    public $maxCount;
    protected $_name = [
        'arraySpec' => 'ArraySpec',
        'maxCount' => 'MaxCount',
    ];

    public function validate()
    {
        if (null !== $this->arraySpec) {
            $this->arraySpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arraySpec) {
            $res['ArraySpec'] = null !== $this->arraySpec ? $this->arraySpec->toArray($noStream) : $this->arraySpec;
        }

        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
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
        if (isset($map['ArraySpec'])) {
            $model->arraySpec = arraySpec::fromMap($map['ArraySpec']);
        }

        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }

        return $model;
    }
}
