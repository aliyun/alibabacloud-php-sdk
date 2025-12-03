<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateTestCaseResponseBody\testcase\detailInfo;

use AlibabaCloud\Dara\Model;

class stepContent extends Model
{
    /**
     * @var string
     */
    public $stepContent;

    /**
     * @var string
     */
    public $stepContentType;

    /**
     * @var string
     */
    public $stepIdentifier;
    protected $_name = [
        'stepContent' => 'stepContent',
        'stepContentType' => 'stepContentType',
        'stepIdentifier' => 'stepIdentifier',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
