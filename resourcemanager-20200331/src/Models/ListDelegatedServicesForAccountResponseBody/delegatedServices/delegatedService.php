<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices;

use AlibabaCloud\Tea\Model;

class delegatedService extends Model
{
    /**
     * @var string
     */
    public $delegationEnabledTime;

    /**
     * @var string
     */
    public $servicePrincipal;
    protected $_name = [
        'delegationEnabledTime' => 'DelegationEnabledTime',
        'servicePrincipal'      => 'ServicePrincipal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->delegationEnabledTime) {
            $res['DelegationEnabledTime'] = $this->delegationEnabledTime;
        }
        if (null !== $this->servicePrincipal) {
            $res['ServicePrincipal'] = $this->servicePrincipal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return delegatedService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DelegationEnabledTime'])) {
            $model->delegationEnabledTime = $map['DelegationEnabledTime'];
        }
        if (isset($map['ServicePrincipal'])) {
            $model->servicePrincipal = $map['ServicePrincipal'];
        }

        return $model;
    }
}
