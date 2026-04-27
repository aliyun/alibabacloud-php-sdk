<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudAgentLoginRequest extends Model
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
    public $loginStatus;

    /**
     * @var string
     */
    public $pauseDescription;
    protected $_name = [
        'bindTel' => 'BindTel',
        'bindType' => 'BindType',
        'cno' => 'Cno',
        'enterpriseId' => 'EnterpriseId',
        'loginStatus' => 'LoginStatus',
        'pauseDescription' => 'PauseDescription',
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

        if (null !== $this->loginStatus) {
            $res['LoginStatus'] = $this->loginStatus;
        }

        if (null !== $this->pauseDescription) {
            $res['PauseDescription'] = $this->pauseDescription;
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

        if (isset($map['LoginStatus'])) {
            $model->loginStatus = $map['LoginStatus'];
        }

        if (isset($map['PauseDescription'])) {
            $model->pauseDescription = $map['PauseDescription'];
        }

        return $model;
    }
}
