<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $subCode;

    /**
     * @var float
     */
    public $passedScore;

    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $passed;
    protected $_name = [
        'subCode'      => 'SubCode',
        'passedScore'  => 'PassedScore',
        'materialInfo' => 'MaterialInfo',
        'passed'       => 'Passed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->passedScore) {
            $res['PassedScore'] = $this->passedScore;
        }
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
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
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['PassedScore'])) {
            $model->passedScore = $map['PassedScore'];
        }
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        return $model;
    }
}
