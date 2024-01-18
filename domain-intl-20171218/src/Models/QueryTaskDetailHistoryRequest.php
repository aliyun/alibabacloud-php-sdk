<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskDetailHistoryRequest extends Model
{
    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $domainNameCursor;

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
    public $taskDetailNoCursor;

    /**
     * @var string
     */
    public $taskNo;

    /**
     * @var int
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'domainName'         => 'DomainName',
        'domainNameCursor'   => 'DomainNameCursor',
        'lang'               => 'Lang',
        'pageSize'           => 'PageSize',
        'taskDetailNoCursor' => 'TaskDetailNoCursor',
        'taskNo'             => 'TaskNo',
        'taskStatus'         => 'TaskStatus',
        'userClientIp'       => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->domainNameCursor) {
            $res['DomainNameCursor'] = $this->domainNameCursor;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->taskDetailNoCursor) {
            $res['TaskDetailNoCursor'] = $this->taskDetailNoCursor;
        }
        if (null !== $this->taskNo) {
            $res['TaskNo'] = $this->taskNo;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
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
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['DomainNameCursor'])) {
            $model->domainNameCursor = $map['DomainNameCursor'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TaskDetailNoCursor'])) {
            $model->taskDetailNoCursor = $map['TaskDetailNoCursor'];
        }
        if (isset($map['TaskNo'])) {
            $model->taskNo = $map['TaskNo'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
