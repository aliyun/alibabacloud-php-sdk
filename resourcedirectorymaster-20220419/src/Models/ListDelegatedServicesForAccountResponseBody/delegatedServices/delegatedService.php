<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\ListDelegatedServicesForAccountResponseBody\delegatedServices;

use AlibabaCloud\Tea\Model;

class delegatedService extends Model
{
    /**
     * @example 1616652684164
     *
     * @var string
     */
    public $delegationEnabledTime;

    /**
     * @example cloudfw.aliyuncs.com
     *
     * @var string
     */
    public $servicePrincipal;

    /**
     * @example ENABLED
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'delegationEnabledTime' => 'DelegationEnabledTime',
        'servicePrincipal'      => 'ServicePrincipal',
        'status'                => 'Status',
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
