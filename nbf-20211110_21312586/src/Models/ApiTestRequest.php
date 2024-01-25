<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class ApiTestRequest extends Model
{
    /**
     * @var string
     */
    public $testCmd;
    protected $_name = [
        'testCmd' => 'testCmd',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->testCmd) {
            $res['testCmd'] = $this->testCmd;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApiTestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['testCmd'])) {
            $model->testCmd = $map['testCmd'];
        }

        return $model;
    }
}
