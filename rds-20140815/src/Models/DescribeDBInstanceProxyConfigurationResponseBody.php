<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBInstanceProxyConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $transparentSwitchConfiguration;

    /**
     * @var string
     */
    public $persistentConnectionsConfiguration;

    /**
     * @var string
     */
    public $attacksProtectionConfiguration;
    protected $_name = [
        'requestId'                          => 'RequestId',
        'transparentSwitchConfiguration'     => 'TransparentSwitchConfiguration',
        'persistentConnectionsConfiguration' => 'PersistentConnectionsConfiguration',
        'attacksProtectionConfiguration'     => 'AttacksProtectionConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->transparentSwitchConfiguration) {
            $res['TransparentSwitchConfiguration'] = $this->transparentSwitchConfiguration;
        }
        if (null !== $this->persistentConnectionsConfiguration) {
            $res['PersistentConnectionsConfiguration'] = $this->persistentConnectionsConfiguration;
        }
        if (null !== $this->attacksProtectionConfiguration) {
            $res['AttacksProtectionConfiguration'] = $this->attacksProtectionConfiguration;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TransparentSwitchConfiguration'])) {
            $model->transparentSwitchConfiguration = $map['TransparentSwitchConfiguration'];
        }
        if (isset($map['PersistentConnectionsConfiguration'])) {
            $model->persistentConnectionsConfiguration = $map['PersistentConnectionsConfiguration'];
        }
        if (isset($map['AttacksProtectionConfiguration'])) {
            $model->attacksProtectionConfiguration = $map['AttacksProtectionConfiguration'];
        }

        return $model;
    }
}
