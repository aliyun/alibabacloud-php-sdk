<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedClusters;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedClusterTemplates;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedWorkspaces;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var associatedClusterTemplates[]
     */
    public $associatedClusterTemplates;

    /**
     * @var associatedClusters[]
     */
    public $associatedClusters;

    /**
     * @var associatedWorkspaces[]
     */
    public $associatedWorkspaces;

    /**
     * @example 2024-09-26T02:10:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2。
     *
     * @var int
     */
    public $nodeMaxCount;

    /**
     * @example 1。
     *
     * @var int
     */
    public $nodeMinCount;

    /**
     * @example EMR_W1_SMALL。
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example postpaid
     *
     * @var string
     */
    public $paymentType;

    /**
     * @example rg-acfm4ewqrznxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @example CLUSTER_RESOURCE_GROUP。
     *
     * @var string
     */
    public $resourceGroupType;
    protected $_name = [
        'associatedClusterTemplates' => 'associatedClusterTemplates',
        'associatedClusters'         => 'associatedClusters',
        'associatedWorkspaces'       => 'associatedWorkspaces',
        'createTime'                 => 'createTime',
        'nodeMaxCount'               => 'nodeMaxCount',
        'nodeMinCount'               => 'nodeMinCount',
        'nodeType'                   => 'nodeType',
        'paymentType'                => 'paymentType',
        'resourceGroupId'            => 'resourceGroupId',
        'resourceGroupName'          => 'resourceGroupName',
        'resourceGroupType'          => 'resourceGroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedClusterTemplates) {
            $res['associatedClusterTemplates'] = [];
            if (null !== $this->associatedClusterTemplates && \is_array($this->associatedClusterTemplates)) {
                $n = 0;
                foreach ($this->associatedClusterTemplates as $item) {
                    $res['associatedClusterTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associatedClusters) {
            $res['associatedClusters'] = [];
            if (null !== $this->associatedClusters && \is_array($this->associatedClusters)) {
                $n = 0;
                foreach ($this->associatedClusters as $item) {
                    $res['associatedClusters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->associatedWorkspaces) {
            $res['associatedWorkspaces'] = [];
            if (null !== $this->associatedWorkspaces && \is_array($this->associatedWorkspaces)) {
                $n = 0;
                foreach ($this->associatedWorkspaces as $item) {
                    $res['associatedWorkspaces'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->nodeMaxCount) {
            $res['nodeMaxCount'] = $this->nodeMaxCount;
        }
        if (null !== $this->nodeMinCount) {
            $res['nodeMinCount'] = $this->nodeMinCount;
        }
        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }
        if (null !== $this->paymentType) {
            $res['paymentType'] = $this->paymentType;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceGroupName) {
            $res['resourceGroupName'] = $this->resourceGroupName;
        }
        if (null !== $this->resourceGroupType) {
            $res['resourceGroupType'] = $this->resourceGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['associatedClusterTemplates'])) {
            if (!empty($map['associatedClusterTemplates'])) {
                $model->associatedClusterTemplates = [];
                $n                                 = 0;
                foreach ($map['associatedClusterTemplates'] as $item) {
                    $model->associatedClusterTemplates[$n++] = null !== $item ? associatedClusterTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['associatedClusters'])) {
            if (!empty($map['associatedClusters'])) {
                $model->associatedClusters = [];
                $n                         = 0;
                foreach ($map['associatedClusters'] as $item) {
                    $model->associatedClusters[$n++] = null !== $item ? associatedClusters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['associatedWorkspaces'])) {
            if (!empty($map['associatedWorkspaces'])) {
                $model->associatedWorkspaces = [];
                $n                           = 0;
                foreach ($map['associatedWorkspaces'] as $item) {
                    $model->associatedWorkspaces[$n++] = null !== $item ? associatedWorkspaces::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['nodeMaxCount'])) {
            $model->nodeMaxCount = $map['nodeMaxCount'];
        }
        if (isset($map['nodeMinCount'])) {
            $model->nodeMinCount = $map['nodeMinCount'];
        }
        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }
        if (isset($map['paymentType'])) {
            $model->paymentType = $map['paymentType'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['resourceGroupName'])) {
            $model->resourceGroupName = $map['resourceGroupName'];
        }
        if (isset($map['resourceGroupType'])) {
            $model->resourceGroupType = $map['resourceGroupType'];
        }

        return $model;
    }
}
