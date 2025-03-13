<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Tea\Model;

class stepContent extends Model
{
    /**
     * @var string
     */
    public $stepContent;

    /**
     * @example RICHTEXT
     *
     * @var string
     */
    public $stepContentType;

    /**
     * @example 59253164xxxxxxf2e98dbc7e27
     *
     * @var string
     */
    public $stepIdentifier;
    protected $_name = [
        'stepContent'     => 'stepContent',
        'stepContentType' => 'stepContentType',
        'stepIdentifier'  => 'stepIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stepContent) {
            $res['stepContent'] = $this->stepContent;
        }
        if (null !== $this->stepContentType) {
            $res['stepContentType'] = $this->stepContentType;
        }
        if (null !== $this->stepIdentifier) {
            $res['stepIdentifier'] = $this->stepIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stepContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['stepContent'])) {
            $model->stepContent = $map['stepContent'];
        }
        if (isset($map['stepContentType'])) {
            $model->stepContentType = $map['stepContentType'];
        }
        if (isset($map['stepIdentifier'])) {
            $model->stepIdentifier = $map['stepIdentifier'];
        }

        return $model;
    }
}
