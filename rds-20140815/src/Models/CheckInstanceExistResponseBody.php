<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CheckInstanceExistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $isExistInstance;
    protected $_name = [
        'requestId'       => 'RequestId',
        'isExistInstance' => 'IsExistInstance',
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
        if (null !== $this->isExistInstance) {
            $res['IsExistInstance'] = $this->isExistInstance;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsExistInstance'])) {
            $model->isExistInstance = $map['IsExistInstance'];
        }

        return $model;
    }
}
