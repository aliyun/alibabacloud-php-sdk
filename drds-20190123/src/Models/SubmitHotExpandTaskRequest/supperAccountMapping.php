<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class supperAccountMapping extends Model
{
    /**
     * @description The ID of the ApsaraDB RDS instance that has the privileged account.
     *
     * @example rm-bp1t1mk5a5bdj****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The name of the privileged account of the ApsaraDB RDS instance.
     *
     * @example test
     *
     * @var string
     */
    public $supperAccount;

    /**
     * @description The password of the privileged account of the ApsaraDB RDS instance.
     *
     * @example 11111111
     *
     * @var string
     */
    public $supperPassword;
    protected $_name = [
        'instanceName'   => 'InstanceName',
        'supperAccount'  => 'SupperAccount',
        'supperPassword' => 'SupperPassword',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->supperAccount) {
            $res['SupperAccount'] = $this->supperAccount;
        }
        if (null !== $this->supperPassword) {
            $res['SupperPassword'] = $this->supperPassword;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supperAccountMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SupperAccount'])) {
            $model->supperAccount = $map['SupperAccount'];
        }
        if (isset($map['SupperPassword'])) {
            $model->supperPassword = $map['SupperPassword'];
        }

        return $model;
    }
}
