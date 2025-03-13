<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\expectedResult;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\precondition;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\stepContent;
use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    /**
     * @var expectedResult
     */
    public $expectedResult;

    /**
     * @var precondition
     */
    public $precondition;

    /**
     * @var stepContent
     */
    public $stepContent;

    /**
     * @example TEXT/TABLE
     *
     * @var string
     */
    public $stepType;
    protected $_name = [
        'expectedResult' => 'expectedResult',
        'precondition'   => 'precondition',
        'stepContent'    => 'stepContent',
        'stepType'       => 'stepType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expectedResult) {
            $res['expectedResult'] = null !== $this->expectedResult ? $this->expectedResult->toMap() : null;
        }
        if (null !== $this->precondition) {
            $res['precondition'] = null !== $this->precondition ? $this->precondition->toMap() : null;
        }
        if (null !== $this->stepContent) {
            $res['stepContent'] = null !== $this->stepContent ? $this->stepContent->toMap() : null;
        }
        if (null !== $this->stepType) {
            $res['stepType'] = $this->stepType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expectedResult'])) {
            $model->expectedResult = expectedResult::fromMap($map['expectedResult']);
        }
        if (isset($map['precondition'])) {
            $model->precondition = precondition::fromMap($map['precondition']);
        }
        if (isset($map['stepContent'])) {
            $model->stepContent = stepContent::fromMap($map['stepContent']);
        }
        if (isset($map['stepType'])) {
            $model->stepType = $map['stepType'];
        }

        return $model;
    }
}
