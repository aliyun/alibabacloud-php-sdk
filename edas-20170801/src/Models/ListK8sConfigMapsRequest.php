<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListK8sConfigMapsRequest extends Model
{
    /**
     * @description The ID of the cluster.
     *
     * @example c0830281-366c-41b6-80fb-542e76******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The filter conditions. Set this parameter to a JSON string in the format of {"field":"Name", "pattern":"configmap-"}.
     *
     * @example {"field":"Name", "pattern":"configmap-"}
     *
     * @var mixed[]
     */
    public $condition;

    /**
     * @description The namespace of the Kubernetes cluster.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The number of the page to return. Pages start from Page 0.
     *
     * @example 0
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Specifies whether to return a list of applications that use a ConfigMap. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $showRelatedApps;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'condition'       => 'Condition',
        'namespace'       => 'Namespace',
        'pageNo'          => 'PageNo',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'showRelatedApps' => 'ShowRelatedApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->condition) {
            $res['Condition'] = $this->condition;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->showRelatedApps) {
            $res['ShowRelatedApps'] = $this->showRelatedApps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListK8sConfigMapsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Condition'])) {
            $model->condition = $map['Condition'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ShowRelatedApps'])) {
            $model->showRelatedApps = $map['ShowRelatedApps'];
        }

        return $model;
    }
}
