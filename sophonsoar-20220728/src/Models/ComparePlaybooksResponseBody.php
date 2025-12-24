<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\ComparePlaybooksResponseBody\compareResult;

class ComparePlaybooksResponseBody extends Model
{
    /**
     * @var compareResult
     */
    public $compareResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'compareResult' => 'CompareResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->compareResult) {
            $this->compareResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compareResult) {
            $res['CompareResult'] = null !== $this->compareResult ? $this->compareResult->toArray($noStream) : $this->compareResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CompareResult'])) {
            $model->compareResult = compareResult::fromMap($map['CompareResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
