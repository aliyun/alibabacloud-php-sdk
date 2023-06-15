<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceExistResponseBody extends Model
{
    /**
     * @description Indicates whether the instance exists. Valid values:
     *
     *   **true**: The instance exists.
     *   **false**: The instance does not exist.
     *
     * @example true
     *
     * @var bool
     */
    public $isExistInstance;

    /**
     * @description The ID of the request.
     *
     * @example 11439B36-F703-49EB-8656-D3C87BE28B57
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isExistInstance' => 'IsExistInstance',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isExistInstance) {
            $res['IsExistInstance'] = $this->isExistInstance;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckInstanceExistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsExistInstance'])) {
            $model->isExistInstance = $map['IsExistInstance'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
