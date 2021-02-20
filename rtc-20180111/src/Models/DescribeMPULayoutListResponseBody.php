<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutListResponseBody\layoutIds;
use AlibabaCloud\Tea\Model;

class DescribeMPULayoutListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layoutIds
     */
    public $layoutIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'layoutIds' => 'LayoutIds',
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
        if (null !== $this->layoutIds) {
            $res['LayoutIds'] = null !== $this->layoutIds ? $this->layoutIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMPULayoutListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LayoutIds'])) {
            $model->layoutIds = layoutIds::fromMap($map['LayoutIds']);
        }

        return $model;
    }
}
