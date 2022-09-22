<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\diagnoseCategories;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\networkAclEntry;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\relativeGroupIds;
use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeNetworkInsightsAnalysisResultResponseBody\networkInsightsAnalysisComponents\networkInsightsAnalysisComponent\securityGroupAcl;
use AlibabaCloud\Tea\Model;

class networkInsightsAnalysisComponent extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var diagnoseCategories
     */
    public $diagnoseCategories;

    /**
     * @var string
     */
    public $message;

    /**
     * @var networkAclEntry
     */
    public $networkAclEntry;

    /**
     * @var string
     */
    public $reachable;

    /**
     * @var relativeGroupIds
     */
    public $relativeGroupIds;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var securityGroupAcl
     */
    public $securityGroupAcl;

    /**
     * @var int
     */
    public $sequence;
    protected $_name = [
        'code'               => 'Code',
        'diagnoseCategories' => 'DiagnoseCategories',
        'message'            => 'Message',
        'networkAclEntry'    => 'NetworkAclEntry',
        'reachable'          => 'Reachable',
        'relativeGroupIds'   => 'RelativeGroupIds',
        'resourceId'         => 'ResourceId',
        'resourceType'       => 'ResourceType',
        'securityGroupAcl'   => 'SecurityGroupAcl',
        'sequence'           => 'Sequence',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->diagnoseCategories) {
            $res['DiagnoseCategories'] = null !== $this->diagnoseCategories ? $this->diagnoseCategories->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->networkAclEntry) {
            $res['NetworkAclEntry'] = null !== $this->networkAclEntry ? $this->networkAclEntry->toMap() : null;
        }
        if (null !== $this->reachable) {
            $res['Reachable'] = $this->reachable;
        }
        if (null !== $this->relativeGroupIds) {
            $res['RelativeGroupIds'] = null !== $this->relativeGroupIds ? $this->relativeGroupIds->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->securityGroupAcl) {
            $res['SecurityGroupAcl'] = null !== $this->securityGroupAcl ? $this->securityGroupAcl->toMap() : null;
        }
        if (null !== $this->sequence) {
            $res['Sequence'] = $this->sequence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkInsightsAnalysisComponent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DiagnoseCategories'])) {
            $model->diagnoseCategories = diagnoseCategories::fromMap($map['DiagnoseCategories']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NetworkAclEntry'])) {
            $model->networkAclEntry = networkAclEntry::fromMap($map['NetworkAclEntry']);
        }
        if (isset($map['Reachable'])) {
            $model->reachable = $map['Reachable'];
        }
        if (isset($map['RelativeGroupIds'])) {
            $model->relativeGroupIds = relativeGroupIds::fromMap($map['RelativeGroupIds']);
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SecurityGroupAcl'])) {
            $model->securityGroupAcl = securityGroupAcl::fromMap($map['SecurityGroupAcl']);
        }
        if (isset($map['Sequence'])) {
            $model->sequence = $map['Sequence'];
        }

        return $model;
    }
}
