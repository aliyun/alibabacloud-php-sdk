<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeAdvanceSearchPageListResponseBody\resultObject;
use AlibabaCloud\Tea\Model;

class DescribeAdvanceSearchPageListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resultObject
     */
    public $resultObject;
    protected $_name = [
        'requestId'    => 'RequestId',
        'resultObject' => 'resultObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultObject) {
            $res['resultObject'] = null !== $this->resultObject ? $this->resultObject->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAdvanceSearchPageListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['resultObject'])) {
            $model->resultObject = resultObject::fromMap($map['resultObject']);
        }

        return $model;
    }
}
