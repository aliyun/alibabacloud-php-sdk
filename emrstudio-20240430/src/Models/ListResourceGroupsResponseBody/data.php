<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedClusters;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedClusterTemplates;
use AlibabaCloud\SDK\EmrStudio\V20240430\Models\ListResourceGroupsResponseBody\data\associatedWorkspaces;

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
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $nodeMaxCount;

    /**
     * @var int
     */
    public $nodeMinCount;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $paymentType;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceGroupName;

    /**
     * @var string
     */
    public $resourceGroupType;
    protected $_name = [
        'associatedClusterTemplates' => 'associatedClusterTemplates',
        'associatedClusters' => 'associatedClusters',
        'associatedWorkspaces' => 'associatedWorkspaces',
        'createTime' => 'createTime',
        'nodeMaxCount' => 'nodeMaxCount',
        'nodeMinCount' => 'nodeMinCount',
        'nodeType' => 'nodeType',
        'paymentType' => 'paymentType',
        'resourceGroupId' => 'resourceGroupId',
        'resourceGroupName' => 'resourceGroupName',
        'resourceGroupType' => 'resourceGroupType',
    ];

    public function validate()
    {
        if (\is_array($this->associatedClusterTemplates)) {
            Model::validateArray($this->associatedClusterTemplates);
        }
        if (\is_array($this->associatedClusters)) {
            Model::validateArray($this->associatedClusters);
        }
        if (\is_array($this->associatedWorkspaces)) {
            Model::validateArray($this->associatedWorkspaces);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedClusterTemplates) {
            if (\is_array($this->associatedClusterTemplates)) {
                $res['associatedClusterTemplates'] = [];
                $n1 = 0;
                foreach ($this->associatedClusterTemplates as $item1) {
                    $res['associatedClusterTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associatedClusters) {
            if (\is_array($this->associatedClusters)) {
                $res['associatedClusters'] = [];
                $n1 = 0;
                foreach ($this->associatedClusters as $item1) {
                    $res['associatedClusters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->associatedWorkspaces) {
            if (\is_array($this->associatedWorkspaces)) {
                $res['associatedWorkspaces'] = [];
                $n1 = 0;
                foreach ($this->associatedWorkspaces as $item1) {
                    $res['associatedWorkspaces'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['associatedClusterTemplates'])) {
            if (!empty($map['associatedClusterTemplates'])) {
                $model->associatedClusterTemplates = [];
                $n1 = 0;
                foreach ($map['associatedClusterTemplates'] as $item1) {
                    $model->associatedClusterTemplates[$n1] = associatedClusterTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['associatedClusters'])) {
            if (!empty($map['associatedClusters'])) {
                $model->associatedClusters = [];
                $n1 = 0;
                foreach ($map['associatedClusters'] as $item1) {
                    $model->associatedClusters[$n1] = associatedClusters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['associatedWorkspaces'])) {
            if (!empty($map['associatedWorkspaces'])) {
                $model->associatedWorkspaces = [];
                $n1 = 0;
                foreach ($map['associatedWorkspaces'] as $item1) {
                    $model->associatedWorkspaces[$n1] = associatedWorkspaces::fromMap($item1);
                    ++$n1;
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
