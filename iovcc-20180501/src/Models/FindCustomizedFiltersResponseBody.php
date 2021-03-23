<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedFiltersResponseBody\customizedFilterList;
use AlibabaCloud\Tea\Model;

class FindCustomizedFiltersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var customizedFilterList
     */
    public $customizedFilterList;
    protected $_name = [
        'requestId'            => 'RequestId',
        'customizedFilterList' => 'CustomizedFilterList',
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
        if (null !== $this->customizedFilterList) {
            $res['CustomizedFilterList'] = null !== $this->customizedFilterList ? $this->customizedFilterList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindCustomizedFiltersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomizedFilterList'])) {
            $model->customizedFilterList = customizedFilterList::fromMap($map['CustomizedFilterList']);
        }

        return $model;
    }
}
