<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleRequest extends Model
{
    /**
     * @var int
     */
    public $durationSeconds;

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
        'policy'          => 'Policy',
        'roleArn'         => 'RoleArn',
        'roleSessionName' => 'RoleSessionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->durationSeconds) {
            $res['DurationSeconds'] = $this->durationSeconds;
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

    /**
     * @param array $map
     *
     * @return AssumeRoleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DurationSeconds'])) {
            $model->durationSeconds = $map['DurationSeconds'];
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
