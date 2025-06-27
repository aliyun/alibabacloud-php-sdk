<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesRequest\tag;

class DescribeAndroidInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $androidInstanceIds;

    /**
     * @var string
     */
    public $androidInstanceName;

    /**
     * @var string
     */
    public $appManagePolicyId;

    /**
     * @var string
     */
    public $authorizedUserId;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceGroupId;

    /**
     * @var string[]
     */
    public $instanceGroupIds;

    /**
     * @var string
     */
    public $instanceGroupName;

    /**
     * @var string
     */
    public $keyPairId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $officeSiteIds;

    /**
     * @var string[]
     */
    public $qosRuleIds;

    /**
     * @var string
     */
    public $saleMode;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'androidInstanceIds' => 'AndroidInstanceIds',
        'androidInstanceName' => 'AndroidInstanceName',
        'appManagePolicyId' => 'AppManagePolicyId',
        'authorizedUserId' => 'AuthorizedUserId',
        'bizRegionId' => 'BizRegionId',
        'chargeType' => 'ChargeType',
        'instanceGroupId' => 'InstanceGroupId',
        'instanceGroupIds' => 'InstanceGroupIds',
        'instanceGroupName' => 'InstanceGroupName',
        'keyPairId' => 'KeyPairId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'officeSiteIds' => 'OfficeSiteIds',
        'qosRuleIds' => 'QosRuleIds',
        'saleMode' => 'SaleMode',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->androidInstanceIds)) {
            Model::validateArray($this->androidInstanceIds);
        }
        if (\is_array($this->instanceGroupIds)) {
            Model::validateArray($this->instanceGroupIds);
        }
        if (\is_array($this->officeSiteIds)) {
            Model::validateArray($this->officeSiteIds);
        }
        if (\is_array($this->qosRuleIds)) {
            Model::validateArray($this->qosRuleIds);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceIds) {
            if (\is_array($this->androidInstanceIds)) {
                $res['AndroidInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->androidInstanceIds as $item1) {
                    $res['AndroidInstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }

        if (null !== $this->appManagePolicyId) {
            $res['AppManagePolicyId'] = $this->appManagePolicyId;
        }

        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }

        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->instanceGroupId) {
            $res['InstanceGroupId'] = $this->instanceGroupId;
        }

        if (null !== $this->instanceGroupIds) {
            if (\is_array($this->instanceGroupIds)) {
                $res['InstanceGroupIds'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupIds as $item1) {
                    $res['InstanceGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceGroupName) {
            $res['InstanceGroupName'] = $this->instanceGroupName;
        }

        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->officeSiteIds) {
            if (\is_array($this->officeSiteIds)) {
                $res['OfficeSiteIds'] = [];
                $n1 = 0;
                foreach ($this->officeSiteIds as $item1) {
                    $res['OfficeSiteIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->qosRuleIds) {
            if (\is_array($this->qosRuleIds)) {
                $res['QosRuleIds'] = [];
                $n1 = 0;
                foreach ($this->qosRuleIds as $item1) {
                    $res['QosRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saleMode) {
            $res['SaleMode'] = $this->saleMode;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AndroidInstanceIds'])) {
            if (!empty($map['AndroidInstanceIds'])) {
                $model->androidInstanceIds = [];
                $n1 = 0;
                foreach ($map['AndroidInstanceIds'] as $item1) {
                    $model->androidInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }

        if (isset($map['AppManagePolicyId'])) {
            $model->appManagePolicyId = $map['AppManagePolicyId'];
        }

        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }

        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['InstanceGroupId'])) {
            $model->instanceGroupId = $map['InstanceGroupId'];
        }

        if (isset($map['InstanceGroupIds'])) {
            if (!empty($map['InstanceGroupIds'])) {
                $model->instanceGroupIds = [];
                $n1 = 0;
                foreach ($map['InstanceGroupIds'] as $item1) {
                    $model->instanceGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceGroupName'])) {
            $model->instanceGroupName = $map['InstanceGroupName'];
        }

        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['OfficeSiteIds'])) {
            if (!empty($map['OfficeSiteIds'])) {
                $model->officeSiteIds = [];
                $n1 = 0;
                foreach ($map['OfficeSiteIds'] as $item1) {
                    $model->officeSiteIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QosRuleIds'])) {
            if (!empty($map['QosRuleIds'])) {
                $model->qosRuleIds = [];
                $n1 = 0;
                foreach ($map['QosRuleIds'] as $item1) {
                    $model->qosRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SaleMode'])) {
            $model->saleMode = $map['SaleMode'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
