<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniTaskResponseBody;

use AlibabaCloud\SDK\MPaaS\V20201028\Models\QueryMcubeMiniTaskResponseBody\queryMiniTaskResult\miniTaskInfo;
use AlibabaCloud\Tea\Model;

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
        'resultMsg'    => 'ResultMsg',
        'success'      => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->miniTaskInfo) {
            $res['MiniTaskInfo'] = null !== $this->miniTaskInfo ? $this->miniTaskInfo->toMap() : null;
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
     * @return queryMiniTaskResult
     */
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
