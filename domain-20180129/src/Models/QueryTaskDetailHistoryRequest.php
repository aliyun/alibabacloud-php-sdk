<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class QueryTaskDetailHistoryRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainNameCursor;

    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 75addb07-28a3-450e-b5ec
     *
     * @var string
     */
    public $taskDetailNoCursor;

    /**
     * @example 75addb07-28a3-450e-b5ec-test
     *
     * @var string
     */
    public $taskNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $taskStatus;

    /**
     * @example 127.0.0.1
     *
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
