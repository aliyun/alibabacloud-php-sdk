<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableLevelResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $deleteResult;
    protected $_name = [
        'requestId'    => 'RequestId',
        'deleteResult' => 'DeleteResult',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('deleteResult', $this->deleteResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deleteResult) {
            $res['DeleteResult'] = $this->deleteResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTableLevelResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeleteResult'])) {
            $model->deleteResult = $map['DeleteResult'];
        }

        return $model;
    }
}
