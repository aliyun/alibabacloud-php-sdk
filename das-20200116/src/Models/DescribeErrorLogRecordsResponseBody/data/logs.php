<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeErrorLogRecordsResponseBody\data;

use AlibabaCloud\Dara\Model;

class logs extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $connInfo;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var string
     */
    public $db;

    /**
     * @var string
     */
    public $user;

    /**
     * @var string
     */
    public $userIp;
    protected $_name = [
        'category' => 'Category',
        'connInfo' => 'ConnInfo',
        'content' => 'Content',
        'createTime' => 'CreateTime',
        'DBInstanceName' => 'DBInstanceName',
        'db' => 'Db',
        'user' => 'User',
        'userIp' => 'UserIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->connInfo) {
            $res['ConnInfo'] = $this->connInfo;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        if (null !== $this->userIp) {
            $res['UserIp'] = $this->userIp;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['ConnInfo'])) {
            $model->connInfo = $map['ConnInfo'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        if (isset($map['UserIp'])) {
            $model->userIp = $map['UserIp'];
        }

        return $model;
    }
}
