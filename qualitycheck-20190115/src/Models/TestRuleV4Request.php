<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Tea\Model;

class TestRuleV4Request extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $isSchemeData;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $testJson;
    protected $_name = [
        'isSchemeData' => 'IsSchemeData',
        'testJson'     => 'TestJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSchemeData) {
            $res['IsSchemeData'] = $this->isSchemeData;
        }
        if (null !== $this->testJson) {
            $res['TestJson'] = $this->testJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TestRuleV4Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSchemeData'])) {
            $model->isSchemeData = $map['IsSchemeData'];
        }
        if (isset($map['TestJson'])) {
            $model->testJson = $map['TestJson'];
        }

        return $model;
    }
}
