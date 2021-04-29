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
    public $persistentConnectionsConfiguration;

    /**
     * @var string
     */
    public $attacksProtectionConfiguration;

    /**
     * @var string
     */
    public $transparentSwitchConfiguration;
    protected $_name = [
        'requestId'                          => 'RequestId',
        'persistentConnectionsConfiguration' => 'PersistentConnectionsConfiguration',
        'attacksProtectionConfiguration'     => 'AttacksProtectionConfiguration',
        'transparentSwitchConfiguration'     => 'TransparentSwitchConfiguration',
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
        if (null !== $this->persistentConnectionsConfiguration) {
            $res['PersistentConnectionsConfiguration'] = $this->persistentConnectionsConfiguration;
        }
        if (null !== $this->attacksProtectionConfiguration) {
            $res['AttacksProtectionConfiguration'] = $this->attacksProtectionConfiguration;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PersistentConnectionsConfiguration'])) {
            $model->persistentConnectionsConfiguration = $map['PersistentConnectionsConfiguration'];
        }
        if (isset($map['AttacksProtectionConfiguration'])) {
            $model->attacksProtectionConfiguration = $map['AttacksProtectionConfiguration'];
        }
        if (isset($map['TransparentSwitchConfiguration'])) {
            $model->transparentSwitchConfiguration = $map['TransparentSwitchConfiguration'];
        }

        return $model;
    }
}
