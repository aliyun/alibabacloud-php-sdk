<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\FindCustomizedPropertiesResponseBody\customizedPropertyList;
use AlibabaCloud\Tea\Model;

class FindCustomizedPropertiesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var customizedPropertyList
     */
    public $customizedPropertyList;
    protected $_name = [
        'requestId'              => 'RequestId',
        'customizedPropertyList' => 'CustomizedPropertyList',
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
        if (null !== $this->customizedPropertyList) {
            $res['CustomizedPropertyList'] = null !== $this->customizedPropertyList ? $this->customizedPropertyList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindCustomizedPropertiesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CustomizedPropertyList'])) {
            $model->customizedPropertyList = customizedPropertyList::fromMap($map['CustomizedPropertyList']);
        }

        return $model;
    }
}
