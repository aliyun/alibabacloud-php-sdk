<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Tea\Model;

class precondition extends Model
{
    /**
     * @var string
     */
    public $preContent;

    /**
     * @example RICHTEXT
     *
     * @var string
     */
    public $preContentType;

    /**
     * @example 59253164xxxxxxf2e98dbc7e27
     *
     * @var string
     */
    public $preIdentifier;
    protected $_name = [
        'preContent'     => 'preContent',
        'preContentType' => 'preContentType',
        'preIdentifier'  => 'preIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->preContent) {
            $res['preContent'] = $this->preContent;
        }
        if (null !== $this->preContentType) {
            $res['preContentType'] = $this->preContentType;
        }
        if (null !== $this->preIdentifier) {
            $res['preIdentifier'] = $this->preIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return precondition
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['preContent'])) {
            $model->preContent = $map['preContent'];
        }
        if (isset($map['preContentType'])) {
            $model->preContentType = $map['preContentType'];
        }
        if (isset($map['preIdentifier'])) {
            $model->preIdentifier = $map['preIdentifier'];
        }

        return $model;
    }
}
