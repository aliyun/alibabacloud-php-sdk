<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Dara\Model;

class precondition extends Model
{
    /**
     * @var string
     */
    public $preContent;
    /**
     * @var string
     */
    public $preContentType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
