<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20200618\Models\DescribeSmartVerifyResponse;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $materialInfo;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var float
     */
    public $passedScore;

    /**
     * @var string
     */
    public $subCode;
    protected $_name = [
        'materialInfo' => 'MaterialInfo',
        'passed'       => 'Passed',
        'passedScore'  => 'PassedScore',
        'subCode'      => 'SubCode',
    ];

    public function validate()
    {
        Model::validateRequired('materialInfo', $this->materialInfo, true);
        Model::validateRequired('passed', $this->passed, true);
        Model::validateRequired('passedScore', $this->passedScore, true);
        Model::validateRequired('subCode', $this->subCode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialInfo) {
            $res['MaterialInfo'] = $this->materialInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->passedScore) {
            $res['PassedScore'] = $this->passedScore;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
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
        if (isset($map['MaterialInfo'])) {
            $model->materialInfo = $map['MaterialInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['PassedScore'])) {
            $model->passedScore = $map['PassedScore'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        return $model;
    }
}
