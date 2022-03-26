<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sts\V20150401\Models;

use AlibabaCloud\Tea\Model;

class AssumeRoleWithSAMLRequest extends Model
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
    public $SAMLAssertion;

    /**
     * @var string
     */
    public $SAMLProviderArn;
    protected $_name = [
        'durationSeconds' => 'DurationSeconds',
        'policy'          => 'Policy',
        'roleArn'         => 'RoleArn',
        'SAMLAssertion'   => 'SAMLAssertion',
        'SAMLProviderArn' => 'SAMLProviderArn',
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
        if (null !== $this->SAMLAssertion) {
            $res['SAMLAssertion'] = $this->SAMLAssertion;
        }
        if (null !== $this->SAMLProviderArn) {
            $res['SAMLProviderArn'] = $this->SAMLProviderArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssumeRoleWithSAMLRequest
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
        if (isset($map['SAMLAssertion'])) {
            $model->SAMLAssertion = $map['SAMLAssertion'];
        }
        if (isset($map['SAMLProviderArn'])) {
            $model->SAMLProviderArn = $map['SAMLProviderArn'];
        }

        return $model;
    }
}
