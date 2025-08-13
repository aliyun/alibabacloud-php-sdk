<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeHasRuleNameByEventCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $resultObject;
    protected $_name = [
        'requestId' => 'RequestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resultObject) {
            $res['resultObject'] = $this->resultObject;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['resultObject'])) {
            $model->resultObject = $map['resultObject'];
        }

        return $model;
    }
}
