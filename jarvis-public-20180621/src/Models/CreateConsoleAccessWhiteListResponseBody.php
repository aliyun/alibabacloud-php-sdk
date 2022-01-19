<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Jarvispublic\V20180621\Models;

use AlibabaCloud\Tea\Model;

class CreateConsoleAccessWhiteListResponseBody extends Model
{
    /**
     * @var string
     */
    public $module;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'module'    => 'Module',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = $this->module;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConsoleAccessWhiteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            $model->module = $map['Module'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
