<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\samlConfig\certificates;

class samlConfig extends Model
{
    /**
     * @var string
     */
    public $bindingMethod;

    /**
     * @var certificates[]
     */
    public $certificates;

    /**
     * @var string
     */
    public $idPEntityId;

    /**
     * @var string
     */
    public $idPSsoUrl;

    /**
     * @var int
     */
    public $maxClockSkew;

    /**
     * @var bool
     */
    public $requireRequestSigned;
    protected $_name = [
        'bindingMethod' => 'BindingMethod',
        'certificates' => 'Certificates',
        'idPEntityId' => 'IdPEntityId',
        'idPSsoUrl' => 'IdPSsoUrl',
        'maxClockSkew' => 'MaxClockSkew',
        'requireRequestSigned' => 'RequireRequestSigned',
    ];

    public function validate()
    {
        if (\is_array($this->certificates)) {
            Model::validateArray($this->certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingMethod) {
            $res['BindingMethod'] = $this->bindingMethod;
        }

        if (null !== $this->certificates) {
            if (\is_array($this->certificates)) {
                $res['Certificates'] = [];
                $n1 = 0;
                foreach ($this->certificates as $item1) {
                    $res['Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->idPEntityId) {
            $res['IdPEntityId'] = $this->idPEntityId;
        }

        if (null !== $this->idPSsoUrl) {
            $res['IdPSsoUrl'] = $this->idPSsoUrl;
        }

        if (null !== $this->maxClockSkew) {
            $res['MaxClockSkew'] = $this->maxClockSkew;
        }

        if (null !== $this->requireRequestSigned) {
            $res['RequireRequestSigned'] = $this->requireRequestSigned;
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
        if (isset($map['BindingMethod'])) {
            $model->bindingMethod = $map['BindingMethod'];
        }

        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n1 = 0;
                foreach ($map['Certificates'] as $item1) {
                    $model->certificates[$n1] = certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['IdPEntityId'])) {
            $model->idPEntityId = $map['IdPEntityId'];
        }

        if (isset($map['IdPSsoUrl'])) {
            $model->idPSsoUrl = $map['IdPSsoUrl'];
        }

        if (isset($map['MaxClockSkew'])) {
            $model->maxClockSkew = $map['MaxClockSkew'];
        }

        if (isset($map['RequireRequestSigned'])) {
            $model->requireRequestSigned = $map['RequireRequestSigned'];
        }

        return $model;
    }
}
