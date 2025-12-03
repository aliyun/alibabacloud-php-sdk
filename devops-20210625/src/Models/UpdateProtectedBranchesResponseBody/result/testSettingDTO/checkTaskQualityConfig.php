<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProtectedBranchesResponseBody\result\testSettingDTO;

use AlibabaCloud\Dara\Model;

class checkTaskQualityConfig extends Model
{
    /**
     * @var string
     */
    public $bizNo;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'bizNo' => 'bizNo',
        'enabled' => 'enabled',
        'message' => 'message',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
