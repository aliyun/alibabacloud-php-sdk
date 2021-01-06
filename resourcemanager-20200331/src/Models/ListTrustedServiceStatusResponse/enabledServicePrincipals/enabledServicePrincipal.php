<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponse\enabledServicePrincipals;

use AlibabaCloud\Tea\Model;

class enabledServicePrincipal extends Model
{
    /**
     * @var string
     */
    public $servicePrincipal;

    /**
     * @var string
     */
    public $enableTime;
    protected $_name = [
        'servicePrincipal' => 'ServicePrincipal',
        'enableTime'       => 'EnableTime',
    ];

    public function validate()
    {
        Model::validateRequired('servicePrincipal', $this->servicePrincipal, true);
        Model::validateRequired('enableTime', $this->enableTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->servicePrincipal) {
            $res['ServicePrincipal'] = $this->servicePrincipal;
        }
        if (null !== $this->enableTime) {
            $res['EnableTime'] = $this->enableTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return enabledServicePrincipal
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServicePrincipal'])) {
            $model->servicePrincipal = $map['ServicePrincipal'];
        }
        if (isset($map['EnableTime'])) {
            $model->enableTime = $map['EnableTime'];
        }

        return $model;
    }
}
