<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;

use AlibabaCloud\Dara\Model;

class clientStats extends Model
{
    /**
     * @var int
     */
    public $activeCount;

    /**
     * @var string
     */
    public $key;

    /**
     * @var int[]
     */
    public $threadIdList;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $userList;
    protected $_name = [
        'activeCount' => 'ActiveCount',
        'key' => 'Key',
        'threadIdList' => 'ThreadIdList',
        'totalCount' => 'TotalCount',
        'userList' => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->threadIdList)) {
            Model::validateArray($this->threadIdList);
        }
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeCount) {
            $res['ActiveCount'] = $this->activeCount;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->threadIdList) {
            if (\is_array($this->threadIdList)) {
                $res['ThreadIdList'] = [];
                $n1 = 0;
                foreach ($this->threadIdList as $item1) {
                    $res['ThreadIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1 = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ActiveCount'])) {
            $model->activeCount = $map['ActiveCount'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['ThreadIdList'])) {
            if (!empty($map['ThreadIdList'])) {
                $model->threadIdList = [];
                $n1 = 0;
                foreach ($map['ThreadIdList'] as $item1) {
                    $model->threadIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1 = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
