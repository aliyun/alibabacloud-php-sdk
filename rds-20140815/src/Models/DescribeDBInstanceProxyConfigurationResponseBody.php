<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceProxyConfigurationResponseBody extends Model
{
    /**
     * @description Indicates whether the mechanism that is used to mitigate brute-force attacks is enabled:
     *
     *   **Enable**
     *   **Disable**
     *
     * Description:
     *
     *   Each client allows {max_failed_login_attempts} logon attempts that fail due to incorrect passwords within {check_interval_seconds} seconds. If one more such attempt is conducted, the client must wait for {blocking_seconds} seconds before you can try again.
     *
     *   Valid values:
     *
     *   check_interval_seconds: **30 to 600**. Unit: seconds.
     *   max_failed_login_attempts: **10 to 5000**. Unit: times.
     *   blocking_seconds: **30 to 3600**. Unit: seconds.
     *
     * @example {\"check_interval_seconds\":\"0\",\"max_failed_login_attempts\":\"0\",\"blocking_seconds\":\"0\",\"status\":\"Disable\"}
     *
     * @var string
     */
    public $attacksProtectionConfiguration;

    /**
     * @description Indicates whether the short-lived connection optimization feature is enabled.
     *
     *   **Enable**
     *   **Disable**
     *
     * {"status":"Disable"}.
     * @example {\"status\":\"Disable\"}
     *
     * @var string
     */
    public $persistentConnectionsConfiguration;

    /**
     * @description The ID of the request.
     *
     * @example E9DD55F4-1A5F-48CA-BA57-DFB3CA8C4C34
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the transparent switchover feature is enabled.
     *
     *   **Enable**
     *   **Disable**
     *
     * {"status":"Enable"}.
     * @example {\"status\":\"Enable\"}
     *
     * @var string
     */
    public $transparentSwitchConfiguration;
    protected $_name = [
        'attacksProtectionConfiguration'     => 'AttacksProtectionConfiguration',
        'persistentConnectionsConfiguration' => 'PersistentConnectionsConfiguration',
        'requestId'                          => 'RequestId',
        'transparentSwitchConfiguration'     => 'TransparentSwitchConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attacksProtectionConfiguration) {
            $res['AttacksProtectionConfiguration'] = $this->attacksProtectionConfiguration;
        }
        if (null !== $this->persistentConnectionsConfiguration) {
            $res['PersistentConnectionsConfiguration'] = $this->persistentConnectionsConfiguration;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transparentSwitchConfiguration) {
            $res['TransparentSwitchConfiguration'] = $this->transparentSwitchConfiguration;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstanceProxyConfigurationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttacksProtectionConfiguration'])) {
            $model->attacksProtectionConfiguration = $map['AttacksProtectionConfiguration'];
        }
        if (isset($map['PersistentConnectionsConfiguration'])) {
            $model->persistentConnectionsConfiguration = $map['PersistentConnectionsConfiguration'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransparentSwitchConfiguration'])) {
            $model->transparentSwitchConfiguration = $map['TransparentSwitchConfiguration'];
        }

        return $model;
    }
}
