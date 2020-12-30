<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskDetailHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainNameCursor;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $taskDetailNoCursor;
    protected $_name = [
        'lang'               => 'Lang',
        'userClientIp'       => 'UserClientIp',
        'taskNo'             => 'TaskNo',
        'domainName'         => 'DomainName',
        'domainNameCursor'   => 'DomainNameCursor',
        'taskStatus'         => 'TaskStatus',
        'pageSize'           => 'PageSize',
        'taskDetailNoCursor' => 'TaskDetailNoCursor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameCursor) {
            $res['DomainNameCursor'] = $this->domainNameCursor;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskDetailNoCursor) {
            $res['TaskDetailNoCursor'] = $this->taskDetailNoCursor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskDetailHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameCursor'])) {
            $model->domainNameCursor = $map['DomainNameCursor'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskDetailNoCursor'])) {
            $model->taskDetailNoCursor = $map['TaskDetailNoCursor'];
        }

        return $model;
    }
}
