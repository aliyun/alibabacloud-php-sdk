<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterLayoutResponseBody extends Model
{
    /**
     * @description The ID of the layout.
     *
     * Record the ID as it can be used to manage the layout being created.
     *
     * @example 21926b36-7dd2-4fde-ae25-51b5bc8e****
     *
     * @var string
     */
    public $layoutId;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F****
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
     * @return AddCasterLayoutResponseBody
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
