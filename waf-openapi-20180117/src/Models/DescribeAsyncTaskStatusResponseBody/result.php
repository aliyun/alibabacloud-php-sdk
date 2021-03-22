<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20180117\Models\DescribeAsyncTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $errCode;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var string
     */
    public $asyncTaskStatus;
    protected $_name = [
        'data'            => 'Data',
        'progress'        => 'Progress',
        'errCode'         => 'ErrCode',
        'errMsg'          => 'ErrMsg',
        'asyncTaskStatus' => 'AsyncTaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->errCode) {
            $res['ErrCode'] = $this->errCode;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->asyncTaskStatus) {
            $res['AsyncTaskStatus'] = $this->asyncTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ErrCode'])) {
            $model->errCode = $map['ErrCode'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['AsyncTaskStatus'])) {
            $model->asyncTaskStatus = $map['AsyncTaskStatus'];
        }

        return $model;
    }
}
