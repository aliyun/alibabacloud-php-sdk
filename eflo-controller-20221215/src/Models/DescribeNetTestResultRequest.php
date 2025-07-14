<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeNetTestResultRequest extends Model
{
    /**
     * @description The ID of the test task. The unique identifier of a network test task.
     *
     * @example dr-uf6i0tv2refv8wz*****
     *
     * @var string
     */
    public $testId;
    protected $_name = [
        'testId' => 'TestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->testId) {
            $res['TestId'] = $this->testId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetTestResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TestId'])) {
            $model->testId = $map['TestId'];
        }

        return $model;
    }
}
