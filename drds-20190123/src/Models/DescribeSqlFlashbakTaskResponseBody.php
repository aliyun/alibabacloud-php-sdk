<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeSqlFlashbakTaskResponseBody\sqlFlashbackTasks;

class DescribeSqlFlashbakTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sqlFlashbackTasks
     */
    public $sqlFlashbackTasks;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'sqlFlashbackTasks' => 'SqlFlashbackTasks',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->sqlFlashbackTasks) {
            $this->sqlFlashbackTasks->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sqlFlashbackTasks) {
            $res['SqlFlashbackTasks'] = null !== $this->sqlFlashbackTasks ? $this->sqlFlashbackTasks->toArray($noStream) : $this->sqlFlashbackTasks;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SqlFlashbackTasks'])) {
            $model->sqlFlashbackTasks = sqlFlashbackTasks::fromMap($map['SqlFlashbackTasks']);
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
