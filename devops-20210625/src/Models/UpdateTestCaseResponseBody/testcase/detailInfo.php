<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\expectedResult;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\precondition;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo\stepContent;

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
     * @var string
     */
    public $stepType;
    protected $_name = [
        'expectedResult' => 'expectedResult',
        'precondition' => 'precondition',
        'stepContent' => 'stepContent',
        'stepType' => 'stepType',
    ];

    public function validate()
    {
        if (null !== $this->expectedResult) {
            $this->expectedResult->validate();
        }
        if (null !== $this->precondition) {
            $this->precondition->validate();
        }
        if (null !== $this->stepContent) {
            $this->stepContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectedResult) {
            $res['expectedResult'] = null !== $this->expectedResult ? $this->expectedResult->toArray($noStream) : $this->expectedResult;
        }

        if (null !== $this->precondition) {
            $res['precondition'] = null !== $this->precondition ? $this->precondition->toArray($noStream) : $this->precondition;
        }

        if (null !== $this->stepContent) {
            $res['stepContent'] = null !== $this->stepContent ? $this->stepContent->toArray($noStream) : $this->stepContent;
        }

        if (null !== $this->stepType) {
            $res['stepType'] = $this->stepType;
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
