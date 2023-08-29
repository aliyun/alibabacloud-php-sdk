<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\CreateMcubeMiniTaskResponseBody;

use AlibabaCloud\Tea\Model;

class createMiniTaskResult extends Model
{
    /**
     * @var string
     */
    public $miniTaskId;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'miniTaskId' => 'MiniTaskId',
        'resultMsg'  => 'ResultMsg',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniTaskId) {
            $res['MiniTaskId'] = $this->miniTaskId;
        }
        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createMiniTaskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MiniTaskId'])) {
            $model->miniTaskId = $map['MiniTaskId'];
        }
        if (isset($map['ResultMsg'])) {
            $model->resultMsg = $map['ResultMsg'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
