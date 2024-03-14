<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskTypeResponseBody;

use AlibabaCloud\Tea\Model;

class taskTypeArray extends Model
{
    /**
     * @description The name of the task type.
     *
     * @example Internet Boundary Firewall Assets
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task.
     *
     * @example InternetFirewallAsset
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'taskName' => 'TaskName',
        'taskType' => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return taskTypeArray
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
