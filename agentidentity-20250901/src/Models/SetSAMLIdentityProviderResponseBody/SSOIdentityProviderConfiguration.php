<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\SetSAMLIdentityProviderResponseBody\SSOIdentityProviderConfiguration\x509Certificates;

class SSOIdentityProviderConfiguration extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $JITProvisionStatus;

    /**
     * @var string
     */
    public $JITUpdateStatus;

    /**
     * @var string
     */
    public $loginURL;

    /**
     * @var string
     */
    public $SAMLBindingType;

    /**
     * @var string
     */
    public $SSOStatus;

    /**
     * @var x509Certificates[]
     */
    public $x509Certificates;
    protected $_name = [
        'entityId' => 'EntityId',
        'JITProvisionStatus' => 'JITProvisionStatus',
        'JITUpdateStatus' => 'JITUpdateStatus',
        'loginURL' => 'LoginURL',
        'SAMLBindingType' => 'SAMLBindingType',
        'SSOStatus' => 'SSOStatus',
        'x509Certificates' => 'X509Certificates',
    ];

    public function validate()
    {
        if (\is_array($this->x509Certificates)) {
            Model::validateArray($this->x509Certificates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->JITProvisionStatus) {
            $res['JITProvisionStatus'] = $this->JITProvisionStatus;
        }

        if (null !== $this->JITUpdateStatus) {
            $res['JITUpdateStatus'] = $this->JITUpdateStatus;
        }

        if (null !== $this->loginURL) {
            $res['LoginURL'] = $this->loginURL;
        }

        if (null !== $this->SAMLBindingType) {
            $res['SAMLBindingType'] = $this->SAMLBindingType;
        }

        if (null !== $this->SSOStatus) {
            $res['SSOStatus'] = $this->SSOStatus;
        }

        if (null !== $this->x509Certificates) {
            if (\is_array($this->x509Certificates)) {
                $res['X509Certificates'] = [];
                $n1 = 0;
                foreach ($this->x509Certificates as $item1) {
                    $res['X509Certificates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['JITProvisionStatus'])) {
            $model->JITProvisionStatus = $map['JITProvisionStatus'];
        }

        if (isset($map['JITUpdateStatus'])) {
            $model->JITUpdateStatus = $map['JITUpdateStatus'];
        }

        if (isset($map['LoginURL'])) {
            $model->loginURL = $map['LoginURL'];
        }

        if (isset($map['SAMLBindingType'])) {
            $model->SAMLBindingType = $map['SAMLBindingType'];
        }

        if (isset($map['SSOStatus'])) {
            $model->SSOStatus = $map['SSOStatus'];
        }

        if (isset($map['X509Certificates'])) {
            if (!empty($map['X509Certificates'])) {
                $model->x509Certificates = [];
                $n1 = 0;
                foreach ($map['X509Certificates'] as $item1) {
                    $model->x509Certificates[$n1] = x509Certificates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
