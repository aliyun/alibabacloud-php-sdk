<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProtectdBranchResponseBody\result\testSettingDTO;

use AlibabaCloud\Tea\Model;

class checkTaskQualityConfig extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $bizNo;

    /**
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example test_task_quality
     *
     * @var string
     */
    public $message;

    /**
     * @example biz-task-quality
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'bizNo'    => 'bizNo',
        'enabled'  => 'enabled',
        'message'  => 'message',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizNo) {
            $res['bizNo'] = $this->bizNo;
        }
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkTaskQualityConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizNo'])) {
            $model->bizNo = $map['bizNo'];
        }
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
