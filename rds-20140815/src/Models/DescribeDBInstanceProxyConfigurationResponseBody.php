<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class DescribeDBInstanceProxyConfigurationResponseBody extends Model
{
    /**
     * @var string
     */
    public $attacksProtectionConfiguration;

    /**
     * @var string
     */
    public $persistentConnectionsConfiguration;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $transparentSwitchConfiguration;
    protected $_name = [
        'attacksProtectionConfiguration' => 'AttacksProtectionConfiguration',
        'persistentConnectionsConfiguration' => 'PersistentConnectionsConfiguration',
        'requestId' => 'RequestId',
        'transparentSwitchConfiguration' => 'TransparentSwitchConfiguration',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
