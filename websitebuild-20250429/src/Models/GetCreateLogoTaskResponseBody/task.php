<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\GetCreateLogoTaskResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 604860995
     *
     * @var string
     */
    public $taskId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'taskId' => 'TaskId',
        'taskStatus' => 'TaskStatus',
        'urls' => 'Urls',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->urls) {
            $res['Urls'] = $this->urls;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['Urls'])) {
            if (!empty($map['Urls'])) {
                $model->urls = $map['Urls'];
            }
        }

        return $model;
    }
}
