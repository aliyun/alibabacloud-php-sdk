<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Dara\Model;

class AssumeRoleRequest extends Model
{
    /**
     * @var int
     */
    public $durationSeconds;

    /**
     * @var string
     */
    public $externalId;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $roleSessionName;
    protected $_name = [
        'durationSeconds' => 'DurationSeconds',
        'externalId' => 'ExternalId',
        'policy' => 'Policy',
        'roleArn' => 'RoleArn',
        'roleSessionName' => 'RoleSessionName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
        }

        if (null !== $this->externalId) {
            $res['ExternalId'] = $this->externalId;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->roleSessionName) {
            $res['RoleSessionName'] = $this->roleSessionName;
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
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
        }

        if (isset($map['ExternalId'])) {
            $model->externalId = $map['ExternalId'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['RoleSessionName'])) {
            $model->roleSessionName = $map['RoleSessionName'];
        }

        return $model;
    }
}
