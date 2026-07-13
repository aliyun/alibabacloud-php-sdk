<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\ResetUserPasswordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $subject;

    /**
     * @var string
     */
    public $userPoolId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'password' => 'Password',
        'subject' => 'Subject',
        'userPoolId' => 'UserPoolId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->subject) {
            $res['Subject'] = $this->subject;
        }

        if (null !== $this->userPoolId) {
            $res['UserPoolId'] = $this->userPoolId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Subject'])) {
            $model->subject = $map['Subject'];
        }

        if (isset($map['UserPoolId'])) {
            $model->userPoolId = $map['UserPoolId'];
        }

        return $model;
    }
}
