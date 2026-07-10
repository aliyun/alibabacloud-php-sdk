<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\UpdateApplicationFederatedCredentialRequest\oidcVerificationConfig;

use AlibabaCloud\Dara\Model;

class kubernetesConfig extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $podNamePrefix;

    /**
     * @var string
     */
    public $serviceAccountName;
    protected $_name = [
        'namespace' => 'Namespace',
        'podNamePrefix' => 'PodNamePrefix',
        'serviceAccountName' => 'ServiceAccountName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->podNamePrefix) {
            $res['PodNamePrefix'] = $this->podNamePrefix;
        }

        if (null !== $this->serviceAccountName) {
            $res['ServiceAccountName'] = $this->serviceAccountName;
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
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['PodNamePrefix'])) {
            $model->podNamePrefix = $map['PodNamePrefix'];
        }

        if (isset($map['ServiceAccountName'])) {
            $model->serviceAccountName = $map['ServiceAccountName'];
        }

        return $model;
    }
}
