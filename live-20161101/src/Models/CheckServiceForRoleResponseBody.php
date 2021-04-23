<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceForRoleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $deletable;
    protected $_name = [
        'requestId' => 'RequestId',
        'deletable' => 'Deletable',
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
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceForRoleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }

        return $model;
    }
}
