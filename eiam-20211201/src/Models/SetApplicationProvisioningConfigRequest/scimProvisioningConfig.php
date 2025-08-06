<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\SetApplicationProvisioningConfigRequest\scimProvisioningConfig\authnConfiguration;

class scimProvisioningConfig extends Model
{
    /**
     * @var authnConfiguration
     */
    public $authnConfiguration;

    /**
     * @var string[]
     */
    public $fullPushScopes;

    /**
     * @var string[]
     */
    public $provisioningActions;

    /**
     * @var string
     */
    public $scimBaseUrl;
    protected $_name = [
        'authnConfiguration' => 'AuthnConfiguration',
        'fullPushScopes' => 'FullPushScopes',
        'provisioningActions' => 'ProvisioningActions',
        'scimBaseUrl' => 'ScimBaseUrl',
    ];

    public function validate()
    {
        if (null !== $this->authnConfiguration) {
            $this->authnConfiguration->validate();
        }
        if (\is_array($this->fullPushScopes)) {
            Model::validateArray($this->fullPushScopes);
        }
        if (\is_array($this->provisioningActions)) {
            Model::validateArray($this->provisioningActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authnConfiguration) {
            $res['AuthnConfiguration'] = null !== $this->authnConfiguration ? $this->authnConfiguration->toArray($noStream) : $this->authnConfiguration;
        }

        if (null !== $this->fullPushScopes) {
            if (\is_array($this->fullPushScopes)) {
                $res['FullPushScopes'] = [];
                $n1 = 0;
                foreach ($this->fullPushScopes as $item1) {
                    $res['FullPushScopes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->provisioningActions) {
            if (\is_array($this->provisioningActions)) {
                $res['ProvisioningActions'] = [];
                $n1 = 0;
                foreach ($this->provisioningActions as $item1) {
                    $res['ProvisioningActions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->scimBaseUrl) {
            $res['ScimBaseUrl'] = $this->scimBaseUrl;
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
        if (isset($map['AuthnConfiguration'])) {
            $model->authnConfiguration = authnConfiguration::fromMap($map['AuthnConfiguration']);
        }

        if (isset($map['FullPushScopes'])) {
            if (!empty($map['FullPushScopes'])) {
                $model->fullPushScopes = [];
                $n1 = 0;
                foreach ($map['FullPushScopes'] as $item1) {
                    $model->fullPushScopes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProvisioningActions'])) {
            if (!empty($map['ProvisioningActions'])) {
                $model->provisioningActions = [];
                $n1 = 0;
                foreach ($map['ProvisioningActions'] as $item1) {
                    $model->provisioningActions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ScimBaseUrl'])) {
            $model->scimBaseUrl = $map['ScimBaseUrl'];
        }

        return $model;
    }
}
