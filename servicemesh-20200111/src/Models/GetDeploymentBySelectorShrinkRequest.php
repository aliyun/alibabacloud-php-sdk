<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetDeploymentBySelectorShrinkRequest extends Model
{
    /**
     * @description The name of the cluster.
     *
     * @example cbe80a56d07ed45818b4d39273e23****
     *
     * @var string
     */
    public $guestCluster;

    /**
     * @description The label selector information.
     *
     * @var string
     */
    public $labelSelectorShrink;

    /**
     * @description The maximum number of returned data entries.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The marker of data queried last time.
     *
     * @example eyJ2IjoibWV0YS5rOHMuaW8vdjEiLCJydiI6NzgxODk3MCwic3RhcnQiOiJuZ2lueDQ1N1x1MDAw****
     *
     * @var string
     */
    public $mark;

    /**
     * @description The namespace.
     *
     * @example default
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @description The ID of the Alibaba Cloud Service Mesh (ASM) instance.
     *
     * @example ce9fc65def2aa4c918747b9360fbd****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'guestCluster'        => 'GuestCluster',
        'labelSelectorShrink' => 'LabelSelector',
        'limit'               => 'Limit',
        'mark'                => 'Mark',
        'nameSpace'           => 'NameSpace',
        'serviceMeshId'       => 'ServiceMeshId',
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
        if (null !== $this->labelSelectorShrink) {
            $res['LabelSelector'] = $this->labelSelectorShrink;
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
     * @return GetDeploymentBySelectorShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GuestCluster'])) {
            $model->guestCluster = $map['GuestCluster'];
        }
        if (isset($map['LabelSelector'])) {
            $model->labelSelectorShrink = $map['LabelSelector'];
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
