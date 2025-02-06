<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class TestRuleV4Request extends Model
{
    /**
     * @var int
     */
    public $isSchemeData;
    /**
     * @var string
     */
    public $testJson;
    protected $_name = [
        'isSchemeData' => 'IsSchemeData',
        'testJson'     => 'TestJson',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
