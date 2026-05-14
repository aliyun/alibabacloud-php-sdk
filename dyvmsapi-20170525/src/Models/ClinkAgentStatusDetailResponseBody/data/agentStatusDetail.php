<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkAgentStatusDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class agentStatusDetail extends Model
{
    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var int
     */
    public $bindType;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $loginType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDetails;
    protected $_name = [
        'bindTel' => 'BindTel',
        'bindType' => 'BindType',
        'cno' => 'Cno',
        'enterpriseId' => 'EnterpriseId',
        'loginType' => 'LoginType',
        'name' => 'Name',
        'status' => 'Status',
        'statusDetails' => 'StatusDetails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->bindType) {
            $res['BindType'] = $this->bindType;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->loginType) {
            $res['LoginType'] = $this->loginType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDetails) {
            $res['StatusDetails'] = $this->statusDetails;
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
        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['BindType'])) {
            $model->bindType = $map['BindType'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['LoginType'])) {
            $model->loginType = $map['LoginType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDetails'])) {
            $model->statusDetails = $map['StatusDetails'];
        }

        return $model;
    }
}
