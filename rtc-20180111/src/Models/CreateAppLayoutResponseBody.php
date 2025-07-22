<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppLayoutResponseBody extends Model
{
    /**
     * @example 167466539798442****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description Id of the request
     *
     * @example 20A6D1E3-1F5F-5440-A4F1-EC7831646FE4
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'layoutId' => 'LayoutId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->layoutId) {
            $res['LayoutId'] = $this->layoutId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppLayoutResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LayoutId'])) {
            $model->layoutId = $map['LayoutId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
