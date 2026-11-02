<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\RevealServiceCredentialResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\RevealServiceCredentialResponseBody\data\credential;

class data extends Model
{
    /**
     * @var string
     */
    public $configRevision;

    /**
     * @var credential
     */
    public $credential;

    /**
     * @var string
     */
    public $credentialType;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'configRevision' => 'configRevision',
        'credential' => 'credential',
        'credentialType' => 'credentialType',
        'provider' => 'provider',
        'serviceId' => 'serviceId',
    ];

    public function validate()
    {
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configRevision) {
            $res['configRevision'] = $this->configRevision;
        }

        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
        }

        if (null !== $this->credentialType) {
            $res['credentialType'] = $this->credentialType;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
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
        if (isset($map['configRevision'])) {
            $model->configRevision = $map['configRevision'];
        }

        if (isset($map['credential'])) {
            $model->credential = credential::fromMap($map['credential']);
        }

        if (isset($map['credentialType'])) {
            $model->credentialType = $map['credentialType'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        return $model;
    }
}
