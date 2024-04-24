<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\CreateJobRequest\tasks\executorPolicy;

use AlibabaCloud\Tea\Model;

class arraySpec extends Model
{
    /**
     * @example 9
     *
     * @var int
     */
    public $indexEnd;

    /**
     * @example 0
     *
     * @var int
     */
    public $indexStart;

    /**
     * @example 1
     *
     * @var int
     */
    public $indexStep;
    protected $_name = [
        'indexEnd'   => 'IndexEnd',
        'indexStart' => 'IndexStart',
        'indexStep'  => 'IndexStep',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexEnd) {
            $res['IndexEnd'] = $this->indexEnd;
        }
        if (null !== $this->indexStart) {
            $res['IndexStart'] = $this->indexStart;
        }
        if (null !== $this->indexStep) {
            $res['IndexStep'] = $this->indexStep;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return arraySpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexEnd'])) {
            $model->indexEnd = $map['IndexEnd'];
        }
        if (isset($map['IndexStart'])) {
            $model->indexStart = $map['IndexStart'];
        }
        if (isset($map['IndexStep'])) {
            $model->indexStep = $map['IndexStep'];
        }

        return $model;
    }
}
