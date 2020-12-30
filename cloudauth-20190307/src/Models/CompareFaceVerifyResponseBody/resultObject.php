<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\CompareFaceVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var float
     */
    public $verifyScore;

    /**
     * @var string
     */
    public $passed;
    protected $_name = [
        'verifyScore' => 'VerifyScore',
        'passed'      => 'Passed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyScore) {
            $res['VerifyScore'] = $this->verifyScore;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyScore'])) {
            $model->verifyScore = $map['VerifyScore'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
