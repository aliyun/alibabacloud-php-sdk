<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;

class SetSAMLIdentityProviderShrinkRequest extends Model
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
     * @var string
     */
    public $userPoolName;

    /**
     * @var string
     */
    public $x509CertificatesShrink;
    protected $_name = [
        'entityId' => 'EntityId',
        'JITProvisionStatus' => 'JITProvisionStatus',
        'JITUpdateStatus' => 'JITUpdateStatus',
        'loginURL' => 'LoginURL',
        'SAMLBindingType' => 'SAMLBindingType',
        'SSOStatus' => 'SSOStatus',
        'userPoolName' => 'UserPoolName',
        'x509CertificatesShrink' => 'X509Certificates',
    ];

    public function validate()
    {
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

        if (null !== $this->userPoolName) {
            $res['UserPoolName'] = $this->userPoolName;
        }

        if (null !== $this->x509CertificatesShrink) {
            $res['X509Certificates'] = $this->x509CertificatesShrink;
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

        if (isset($map['UserPoolName'])) {
            $model->userPoolName = $map['UserPoolName'];
        }

        if (isset($map['X509Certificates'])) {
            $model->x509CertificatesShrink = $map['X509Certificates'];
        }

        return $model;
    }
}
