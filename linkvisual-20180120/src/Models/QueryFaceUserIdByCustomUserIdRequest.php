<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class QueryFaceUserIdByCustomUserIdRequest extends Model
{
    /**
     * @example TestCustomUserId
     *
     * @var string
     */
    public $customUserId;

    /**
     * @example TestIsolationId
     *
     * @var string
     */
    public $isolationId;
    protected $_name = [
        'customUserId' => 'CustomUserId',
        'isolationId'  => 'IsolationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customUserId) {
            $res['CustomUserId'] = $this->customUserId;
        }
        if (null !== $this->isolationId) {
            $res['IsolationId'] = $this->isolationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFaceUserIdByCustomUserIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomUserId'])) {
            $model->customUserId = $map['CustomUserId'];
        }
        if (isset($map['IsolationId'])) {
            $model->isolationId = $map['IsolationId'];
        }

        return $model;
    }
}
