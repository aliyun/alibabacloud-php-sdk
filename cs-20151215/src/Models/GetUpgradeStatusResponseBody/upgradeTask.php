<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetUpgradeStatusResponseBody;

use AlibabaCloud\Tea\Model;

class upgradeTask extends Model
{
    /**
     * @description 任务描述信息。
     *
     * @var string
     */
    public $message;

    /**
     * @description 任务状态：  emptry、running、success、failed
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'message' => 'message',
        'status'  => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
