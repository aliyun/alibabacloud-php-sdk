<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskInfoHistoryRequest extends Model
{
    /**
     * @var int
     */
    public $beginCreateTime;

    /**
     * @var int
     */
    public $createTimeCursor;

    /**
     * @var int
     */
    public $endCreateTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $taskNoCursor;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'beginCreateTime'  => 'BeginCreateTime',
        'createTimeCursor' => 'CreateTimeCursor',
        'endCreateTime'    => 'EndCreateTime',
        'lang'             => 'Lang',
        'pageSize'         => 'PageSize',
        'taskNoCursor'     => 'TaskNoCursor',
        'userClientIp'     => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginCreateTime) {
            $res['BeginCreateTime'] = $this->beginCreateTime;
        }
        if (null !== $this->createTimeCursor) {
            $res['CreateTimeCursor'] = $this->createTimeCursor;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskNoCursor) {
            $res['TaskNoCursor'] = $this->taskNoCursor;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['BeginCreateTime'])) {
            $model->beginCreateTime = $map['BeginCreateTime'];
        }
        if (isset($map['CreateTimeCursor'])) {
            $model->createTimeCursor = $map['CreateTimeCursor'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskNoCursor'])) {
            $model->taskNoCursor = $map['TaskNoCursor'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
