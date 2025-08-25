<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniTaskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MPaaS\V20200710\Models\QueryMcubeMiniTaskResponseBody\queryMiniTaskResult\miniTaskInfo;

class queryMiniTaskResult extends Model
{
    /**
     * @var miniTaskInfo
     */
    public $miniTaskInfo;

    /**
     * @var string
     */
    public $resultMsg;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'miniTaskInfo' => 'MiniTaskInfo',
        'resultMsg' => 'ResultMsg',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->miniTaskInfo) {
            $this->miniTaskInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->miniTaskInfo) {
            $res['MiniTaskInfo'] = null !== $this->miniTaskInfo ? $this->miniTaskInfo->toArray($noStream) : $this->miniTaskInfo;
        }

        if (null !== $this->resultMsg) {
            $res['ResultMsg'] = $this->resultMsg;
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
        if (isset($map['MiniTaskInfo'])) {
            $model->miniTaskInfo = miniTaskInfo::fromMap($map['MiniTaskInfo']);
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
