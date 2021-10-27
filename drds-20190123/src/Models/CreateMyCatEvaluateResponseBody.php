<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class CreateMyCatEvaluateResponseBody extends Model
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
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'taskIdList' => 'TaskIdList',
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
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->taskIdList) {
            $res['TaskIdList'] = $this->taskIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMyCatEvaluateResponseBody
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
        if (isset($map['TaskIdList'])) {
            if (!empty($map['TaskIdList'])) {
                $model->taskIdList = $map['TaskIdList'];
            }
        }

        return $model;
    }
}
