<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileProtectClientRuleDashboardResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authTotal;

    /**
     * @var int
     */
    public $bindCount;

    /**
     * @var int
     */
    public $protectedDirectoriesCount;

    /**
     * @var int
     */
    public $protectedInstancesCount;
    protected $_name = [
        'authTotal' => 'AuthTotal',
        'bindCount' => 'BindCount',
        'protectedDirectoriesCount' => 'ProtectedDirectoriesCount',
        'protectedInstancesCount' => 'ProtectedInstancesCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authTotal) {
            $res['AuthTotal'] = $this->authTotal;
        }

        if (null !== $this->bindCount) {
            $res['BindCount'] = $this->bindCount;
        }

        if (null !== $this->protectedDirectoriesCount) {
            $res['ProtectedDirectoriesCount'] = $this->protectedDirectoriesCount;
        }

        if (null !== $this->protectedInstancesCount) {
            $res['ProtectedInstancesCount'] = $this->protectedInstancesCount;
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
        if (isset($map['AuthTotal'])) {
            $model->authTotal = $map['AuthTotal'];
        }

        if (isset($map['BindCount'])) {
            $model->bindCount = $map['BindCount'];
        }

        if (isset($map['ProtectedDirectoriesCount'])) {
            $model->protectedDirectoriesCount = $map['ProtectedDirectoriesCount'];
        }

        if (isset($map['ProtectedInstancesCount'])) {
            $model->protectedInstancesCount = $map['ProtectedInstancesCount'];
        }

        return $model;
    }
}
