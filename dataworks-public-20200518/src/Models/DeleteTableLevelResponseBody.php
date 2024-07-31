<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableLevelResponseBody extends Model
{
    /**
     * @description Indicates whether the table level was deleted.
     *
     * @example true
     *
     * @var bool
     */
    public $deleteResult;

    /**
     * @description The request ID.
     *
     * @example abcde
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteResult' => 'DeleteResult',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteResult) {
            $res['DeleteResult'] = $this->deleteResult;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTableLevelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteResult'])) {
            $model->deleteResult = $map['DeleteResult'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
