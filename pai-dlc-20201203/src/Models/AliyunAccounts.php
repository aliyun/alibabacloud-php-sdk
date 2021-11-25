<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class AliyunAccounts extends Model
{
    /**
     * @description Aliyun账号的UID
     *
     * @var string
     */
    public $aliyunUid;

    /**
     * @description 弹内用户的工号
     *
     * @var string
     */
    public $employeeId;

    /**
     * @description 这条记录的创建时间
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 这条记录的上次修改时间
     *
     * @var string
     */
    public $gmtModifyTime;
    protected $_name = [
        'aliyunUid'     => 'AliyunUid',
        'employeeId'    => 'EmployeeId',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifyTime' => 'GmtModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunUid) {
            $res['AliyunUid'] = $this->aliyunUid;
        }
        if (null !== $this->employeeId) {
            $res['EmployeeId'] = $this->employeeId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AliyunAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunUid'])) {
            $model->aliyunUid = $map['AliyunUid'];
        }
        if (isset($map['EmployeeId'])) {
            $model->employeeId = $map['EmployeeId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }

        return $model;
    }
}
