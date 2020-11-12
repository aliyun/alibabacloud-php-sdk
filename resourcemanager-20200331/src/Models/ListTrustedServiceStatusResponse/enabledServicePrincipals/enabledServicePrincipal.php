<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponse\enabledServicePrincipals;

use AlibabaCloud\Tea\Model;

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
        'enableTime'       => 'EnableTime',
        'servicePrincipal' => 'ServicePrincipal',
    ];

    public function validate()
    {
        Model::validateRequired('enableTime', $this->enableTime, true);
        Model::validateRequired('servicePrincipal', $this->servicePrincipal, true);
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return enabledServicePrincipal
     */
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
