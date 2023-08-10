<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordHistoryConfigurationRequest extends Model
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
     * @description The maximum number of recent passwords that can be retained. This parameter must be specified when PasswordHistoryStatus is set to enabled.
     *
     * @example 3
     *
     * @var int
     */
    public $passwordHistoryMaxRetention;

    /**
     * @description Specifies whether to enable the password history feature. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $passwordHistoryStatus;
    protected $_name = [
        'instanceId'                  => 'InstanceId',
        'passwordHistoryMaxRetention' => 'PasswordHistoryMaxRetention',
        'passwordHistoryStatus'       => 'PasswordHistoryStatus',
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
        if (null !== $this->passwordHistoryMaxRetention) {
            $res['PasswordHistoryMaxRetention'] = $this->passwordHistoryMaxRetention;
        }
        if (null !== $this->passwordHistoryStatus) {
            $res['PasswordHistoryStatus'] = $this->passwordHistoryStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetPasswordHistoryConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PasswordHistoryMaxRetention'])) {
            $model->passwordHistoryMaxRetention = $map['PasswordHistoryMaxRetention'];
        }
        if (isset($map['PasswordHistoryStatus'])) {
            $model->passwordHistoryStatus = $map['PasswordHistoryStatus'];
        }

        return $model;
    }
}
