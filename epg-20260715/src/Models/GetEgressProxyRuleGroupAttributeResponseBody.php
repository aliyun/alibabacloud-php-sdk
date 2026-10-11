<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeResponseBody\egressProxyRules;
use AlibabaCloud\SDK\EPG\V20260715\Models\GetEgressProxyRuleGroupAttributeResponseBody\tags;

class GetEgressProxyRuleGroupAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $egressProxyIpPoolId;

    /**
     * @var string
     */
    public $egressProxyRuleGroupId;

    /**
     * @var string
     */
    public $egressProxyRuleGroupName;

    /**
     * @var egressProxyRules
     */
    public $egressProxyRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tags[]
     */
    public $tags;
    protected $_name = [
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'egressProxyIpPoolId' => 'EgressProxyIpPoolId',
        'egressProxyRuleGroupId' => 'EgressProxyRuleGroupId',
        'egressProxyRuleGroupName' => 'EgressProxyRuleGroupName',
        'egressProxyRules' => 'EgressProxyRules',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (null !== $this->egressProxyRules) {
            $this->egressProxyRules->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->egressProxyIpPoolId) {
            $res['EgressProxyIpPoolId'] = $this->egressProxyIpPoolId;
        }

        if (null !== $this->egressProxyRuleGroupId) {
            $res['EgressProxyRuleGroupId'] = $this->egressProxyRuleGroupId;
        }

        if (null !== $this->egressProxyRuleGroupName) {
            $res['EgressProxyRuleGroupName'] = $this->egressProxyRuleGroupName;
        }

        if (null !== $this->egressProxyRules) {
            $res['EgressProxyRules'] = null !== $this->egressProxyRules ? $this->egressProxyRules->toArray($noStream) : $this->egressProxyRules;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EgressProxyIpPoolId'])) {
            $model->egressProxyIpPoolId = $map['EgressProxyIpPoolId'];
        }

        if (isset($map['EgressProxyRuleGroupId'])) {
            $model->egressProxyRuleGroupId = $map['EgressProxyRuleGroupId'];
        }

        if (isset($map['EgressProxyRuleGroupName'])) {
            $model->egressProxyRuleGroupName = $map['EgressProxyRuleGroupName'];
        }

        if (isset($map['EgressProxyRules'])) {
            $model->egressProxyRules = egressProxyRules::fromMap($map['EgressProxyRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
