<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;

use AlibabaCloud\Tea\Model;

class dbStats extends Model
{
    /**
     * @description The number of active sessions of the database.
     *
     * >  If the type of the command executed in the session is Query or Execute and the session in the transaction is not terminated, the session is active.
     * @example 1
     *
     * @var int
     */
    public $activeCount;

    /**
     * @description The database name.
     *
     * @example dbTest
     *
     * @var string
     */
    public $key;

    /**
     * @description The IDs of the sessions of the database.
     *
     * @var int[]
     */
    public $threadIdList;

    /**
     * @description The total number of sessions of the database.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The database accounts to which the sessions belong.
     *
     * @var string[]
     */
    public $userList;
    protected $_name = [
        'activeCount'  => 'ActiveCount',
        'key'          => 'Key',
        'threadIdList' => 'ThreadIdList',
        'totalCount'   => 'TotalCount',
        'userList'     => 'UserList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->threadIdList) {
            $res['ThreadIdList'] = $this->threadIdList;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->userList) {
            $res['UserList'] = $this->userList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dbStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ThreadIdList'])) {
            if (!empty($map['ThreadIdList'])) {
                $model->threadIdList = $map['ThreadIdList'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = $map['UserList'];
            }
        }

        return $model;
    }
}
