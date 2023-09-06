<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeServerlessJobsResponseBody\jobInfos;

use AlibabaCloud\Tea\Model;

class arrayProperties extends Model
{
    /**
     * @description The end value of the array job index.
     *
     * @example 5
     *
     * @var int
     */
    public $indexEnd;

    /**
     * @description The starting value of the array job index.
     *
     * @example 1
     *
     * @var int
     */
    public $indexStart;

    /**
     * @description The interval of the array job index.
     *
     * @example 2
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
     * @return arrayProperties
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
