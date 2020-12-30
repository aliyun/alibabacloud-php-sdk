<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasResponseBody\areas;
use AlibabaCloud\Tea\Model;

class DescribeAreasResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var areas
     */
    public $areas;
    protected $_name = [
        'requestId' => 'RequestId',
        'areas'     => 'Areas',
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
        if (null !== $this->areas) {
            $res['Areas'] = null !== $this->areas ? $this->areas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAreasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Areas'])) {
            $model->areas = areas::fromMap($map['Areas']);
        }

        return $model;
    }
}
