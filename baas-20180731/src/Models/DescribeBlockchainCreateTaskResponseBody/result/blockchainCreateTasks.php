<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainCreateTaskResponseBody\result;

use AlibabaCloud\Tea\Model;

class blockchainCreateTasks extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizid'      => 'Bizid',
        'createTime' => 'CreateTime',
        'memo'       => 'Memo',
        'name'       => 'Name',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockchainCreateTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
