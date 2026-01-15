<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models\TestModelResponseBody\resultObject;

use AlibabaCloud\Dara\Model;

class testResult extends Model
{
    /**
     * @var string
     */
    public $actualResult;

    /**
     * @var bool
     */
    public $consistency;

    /**
     * @var string
     */
    public $testResult;

    /**
     * @var string
     */
    public $trainResult;
    protected $_name = [
        'actualResult' => 'ActualResult',
        'consistency' => 'Consistency',
        'testResult' => 'TestResult',
        'trainResult' => 'TrainResult',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualResult) {
            $res['ActualResult'] = $this->actualResult;
        }

        if (null !== $this->consistency) {
            $res['Consistency'] = $this->consistency;
        }

        if (null !== $this->testResult) {
            $res['TestResult'] = $this->testResult;
        }

        if (null !== $this->trainResult) {
            $res['TrainResult'] = $this->trainResult;
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
        if (isset($map['ActualResult'])) {
            $model->actualResult = $map['ActualResult'];
        }

        if (isset($map['Consistency'])) {
            $model->consistency = $map['Consistency'];
        }

        if (isset($map['TestResult'])) {
            $model->testResult = $map['TestResult'];
        }

        if (isset($map['TrainResult'])) {
            $model->trainResult = $map['TrainResult'];
        }

        return $model;
    }
}
