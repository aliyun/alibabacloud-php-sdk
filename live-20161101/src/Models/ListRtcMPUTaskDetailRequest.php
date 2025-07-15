<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListRtcMPUTaskDetailRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * >  The ID can be up to 64 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     * This parameter is required.
     *
     * @example yourAppId
     *
     * @var string
     */
    public $appId;

    /**
     * @description The page number.
     *
     * @example 20
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * >  If you do not specify TaskId, you must specify PageSize and PageNo. Then, the parameters of all stream relay tasks for the specified application are returned in pages.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The task ID.
     *
     * >
     *
     *   The ID can be up to 55 characters in length and can contain letters, digits, underscores (_), and hyphens (-).
     *
     *   If you specify TaskId, the parameters of the specified tasks are returned.
     *
     * @example yourTaskId
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'AppId',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRtcMPUTaskDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
