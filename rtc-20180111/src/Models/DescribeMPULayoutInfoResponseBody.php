<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\SDK\Rtc\V20180111\Models\DescribeMPULayoutInfoResponseBody\layout;
use AlibabaCloud\Tea\Model;

class DescribeMPULayoutInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var layout
     */
    public $layout;
    protected $_name = [
        'requestId' => 'RequestId',
        'layout'    => 'Layout',
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
        if (null !== $this->layout) {
            $res['Layout'] = null !== $this->layout ? $this->layout->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMPULayoutInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Layout'])) {
            $model->layout = layout::fromMap($map['Layout']);
        }

        return $model;
    }
}
