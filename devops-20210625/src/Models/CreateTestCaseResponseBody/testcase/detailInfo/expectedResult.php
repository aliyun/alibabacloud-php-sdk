<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Tea\Model;

class expectedResult extends Model
{
    /**
     * @var string
     */
    public $expectContent;

    /**
     * @example RICHTEXT
     *
     * @var string
     */
    public $expectContentType;

    /**
     * @example 59253164xxxxxxf2e98dbc7e27
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return expectedResult
     */
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
