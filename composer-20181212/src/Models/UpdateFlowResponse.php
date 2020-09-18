<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UpdateFlowResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $currentVersionId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'currentVersionId' => 'CurrentVersionId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('currentVersionId', $this->currentVersionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->currentVersionId) {
            $res['CurrentVersionId'] = $this->currentVersionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateFlowResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['CurrentVersionId'])) {
            $model->currentVersionId = $map['CurrentVersionId'];
        }

        return $model;
    }
}
