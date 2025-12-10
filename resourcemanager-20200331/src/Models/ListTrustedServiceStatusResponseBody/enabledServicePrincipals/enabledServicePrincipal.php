<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals;

use AlibabaCloud\Dara\Model;

class enabledServicePrincipal extends Model
{
    /**
     * @var string
     */
    public $enableTime;

    /**
     * @var string
     */
    public $servicePrincipal;
    protected $_name = [
        'enableTime' => 'EnableTime',
        'servicePrincipal' => 'ServicePrincipal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }

        if (null !== $this->servicePrincipal) {
            $res['ServicePrincipal'] = $this->servicePrincipal;
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
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }

        if (isset($map['ServicePrincipal'])) {
            $model->servicePrincipal = $map['ServicePrincipal'];
        }

        return $model;
    }
}
