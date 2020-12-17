<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class upgradeTask extends Model
{
    /**
     * @description 任务状态：  emptry、running、success、failed
     *
     * @var string
     */
    public $status;

    /**
     * @description 任务描述信息。
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'status'  => 'status',
        'message' => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
