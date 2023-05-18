<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListTrustedServiceStatusResponseBody\enabledServicePrincipals;

use AlibabaCloud\Tea\Model;

class enabledServicePrincipal extends Model
{
    /**
     * @description The time when the trusted service was enabled.
     *
     * @example 2019-02-18T15:32:10.473Z
     *
     * @var string
     */
    public $enableTime;

    /**
     * @description The identification of the trusted service.
     *
     * @example config.aliyuncs.com
     *
     * @var string
     */
    public $servicePrincipal;
    protected $_name = [
        'enableTime'       => 'EnableTime',
        'servicePrincipal' => 'ServicePrincipal',
    ];

    public function validate()
    {
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
