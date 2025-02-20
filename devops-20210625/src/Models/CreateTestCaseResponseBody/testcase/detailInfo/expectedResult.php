<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Dara\Model;

class expectedResult extends Model
{
    /**
     * @var string
     */
    public $expectContent;
    /**
     * @var string
     */
    public $expectContentType;
    /**
     * @var string
     */
    public $expectIdentifier;
    protected $_name = [
        'expectContent'     => 'expectContent',
        'expectContentType' => 'expectContentType',
        'expectIdentifier'  => 'expectIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expectContent) {
            $res['expectContent'] = $this->expectContent;
        }

        if (null !== $this->expectContentType) {
            $res['expectContentType'] = $this->expectContentType;
        }

        if (null !== $this->expectIdentifier) {
            $res['expectIdentifier'] = $this->expectIdentifier;
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
        if (isset($map['expectContent'])) {
            $model->expectContent = $map['expectContent'];
        }

        if (isset($map['expectContentType'])) {
            $model->expectContentType = $map['expectContentType'];
        }

        if (isset($map['expectIdentifier'])) {
            $model->expectIdentifier = $map['expectIdentifier'];
        }

        return $model;
    }
}
