<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\SDK\Eiam\V20211201\Models\SetPasswordComplexityConfigurationRequest\passwordComplexityRules;
use AlibabaCloud\Tea\Model;

class SetPasswordComplexityConfigurationRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example idaas_ue2jvisn35ea5lmthk267xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The password complexity rules.
     *
     * @var passwordComplexityRules[]
     */
    public $passwordComplexityRules;

    /**
     * @description The minimum number of characters in a password.
     *
     * @example 10
     *
     * @var int
     */
    public $passwordMinLength;
    protected $_name = [
        'instanceId'              => 'InstanceId',
        'passwordComplexityRules' => 'PasswordComplexityRules',
        'passwordMinLength'       => 'PasswordMinLength',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->passwordComplexityRules) {
            $res['PasswordComplexityRules'] = [];
            if (null !== $this->passwordComplexityRules && \is_array($this->passwordComplexityRules)) {
                $n = 0;
                foreach ($this->passwordComplexityRules as $item) {
                    $res['PasswordComplexityRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->passwordMinLength) {
            $res['PasswordMinLength'] = $this->passwordMinLength;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPasswordComplexityConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PasswordComplexityRules'])) {
            if (!empty($map['PasswordComplexityRules'])) {
                $model->passwordComplexityRules = [];
                $n                              = 0;
                foreach ($map['PasswordComplexityRules'] as $item) {
                    $model->passwordComplexityRules[$n++] = null !== $item ? passwordComplexityRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PasswordMinLength'])) {
            $model->passwordMinLength = $map['PasswordMinLength'];
        }

        return $model;
    }
}
