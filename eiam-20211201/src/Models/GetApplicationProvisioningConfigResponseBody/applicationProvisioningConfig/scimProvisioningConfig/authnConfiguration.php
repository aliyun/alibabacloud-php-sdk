<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetApplicationProvisioningConfigResponseBody\applicationProvisioningConfig\scimProvisioningConfig\authnConfiguration\authnParam;

class authnConfiguration extends Model
{
    /**
     * @var string
     */
    public $authnMode;

    /**
     * @var authnParam
     */
    public $authnParam;

    /**
     * @var string
     */
    public $grantType;
    protected $_name = [
        'authnMode' => 'AuthnMode',
        'authnParam' => 'AuthnParam',
        'grantType' => 'GrantType',
    ];

    public function validate()
    {
        if (null !== $this->authnParam) {
            $this->authnParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnMode) {
            $res['AuthnMode'] = $this->authnMode;
        }

        if (null !== $this->authnParam) {
            $res['AuthnParam'] = null !== $this->authnParam ? $this->authnParam->toArray($noStream) : $this->authnParam;
        }

        if (null !== $this->grantType) {
            $res['GrantType'] = $this->grantType;
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
        if (isset($map['AuthnMode'])) {
            $model->authnMode = $map['AuthnMode'];
        }

        if (isset($map['AuthnParam'])) {
            $model->authnParam = authnParam::fromMap($map['AuthnParam']);
        }

        if (isset($map['GrantType'])) {
            $model->grantType = $map['GrantType'];
        }

        return $model;
    }
}
