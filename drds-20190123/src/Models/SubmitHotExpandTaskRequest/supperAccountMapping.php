<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Dara\Model;

class supperAccountMapping extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $supperAccount;

    /**
     * @var string
     */
    public $supperPassword;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'supperAccount' => 'SupperAccount',
        'supperPassword' => 'SupperPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
