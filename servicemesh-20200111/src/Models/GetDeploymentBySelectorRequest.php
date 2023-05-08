<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetDeploymentBySelectorRequest extends Model
{
    /**
     * @example cbe80a56d07ed45818b4d39273e23****
     *
     * @var string
     */
    public $guestCluster;

    /**
     * @var string[]
     */
    public $labelSelector;

    /**
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @example eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NzgxODk3MCwic3RhcnQiOiJuZ2lueDQ1N1x1MDAw****
     *
     * @var string
     */
    public $mark;

    /**
     * @example default
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @example ce9fc65def2aa4c918747b9360fbd****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestCluster'  => 'GuestCluster',
        'labelSelector' => 'LabelSelector',
        'limit'         => 'Limit',
        'mark'          => 'Mark',
        'nameSpace'     => 'NameSpace',
        'serviceMeshId' => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guestCluster) {
            $res['GuestCluster'] = $this->guestCluster;
        }
        if (null !== $this->labelSelector) {
            $res['LabelSelector'] = $this->labelSelector;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDeploymentBySelectorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }
        if (isset($map['LabelSelector'])) {
            $model->labelSelector = $map['LabelSelector'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
