<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskInfoHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $beginCreateTime;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $createTimeCursor;

    /**
     * @var string
     */
    public $taskNoCursor;
    protected $_name = [
        'userClientIp'     => 'UserClientIp',
        'lang'             => 'Lang',
        'beginCreateTime'  => 'BeginCreateTime',
        'endCreateTime'    => 'EndCreateTime',
        'pageSize'         => 'PageSize',
        'createTimeCursor' => 'CreateTimeCursor',
        'taskNoCursor'     => 'TaskNoCursor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->beginCreateTime) {
            $res['BeginCreateTime'] = $this->beginCreateTime;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->createTimeCursor) {
            $res['CreateTimeCursor'] = $this->createTimeCursor;
        }
        if (null !== $this->taskNoCursor) {
            $res['TaskNoCursor'] = $this->taskNoCursor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskInfoHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['BeginCreateTime'])) {
            $model->beginCreateTime = $map['BeginCreateTime'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CreateTimeCursor'])) {
            $model->createTimeCursor = $map['CreateTimeCursor'];
        }
        if (isset($map['TaskNoCursor'])) {
            $model->taskNoCursor = $map['TaskNoCursor'];
        }

        return $model;
    }
}
