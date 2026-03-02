<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class CheckDeveloperRoleRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'accountId' => 'accountId',
        'companyId' => 'companyId',
        'platform' => 'platform',
        'roleName' => 'roleName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        return $model;
    }
}
