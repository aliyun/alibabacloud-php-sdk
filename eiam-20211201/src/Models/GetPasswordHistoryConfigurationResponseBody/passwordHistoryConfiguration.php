<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetPasswordHistoryConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class passwordHistoryConfiguration extends Model
{
    /**
     * @description The maximum number of recent passwords that are retained.
     *
     * @example 3
     *
     * @var int
     */
    public $passwordHistoryMaxRetention;

    /**
     * @description Indicates whether the password history feature is enabled. Valid values:
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
        'passwordHistoryMaxRetention' => 'PasswordHistoryMaxRetention',
        'passwordHistoryStatus'       => 'PasswordHistoryStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return passwordHistoryConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordHistoryMaxRetention'])) {
            $model->passwordHistoryMaxRetention = $map['PasswordHistoryMaxRetention'];
        }
        if (isset($map['PasswordHistoryStatus'])) {
            $model->passwordHistoryStatus = $map['PasswordHistoryStatus'];
        }

        return $model;
    }
}
