<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyGatewaysRequest\tag;

class ListEgressProxyGatewaysRequest extends Model
{
    /**
     * @var string[]
     */
    public $egressProxyConfigurationIds;

    /**
     * @var string[]
     */
    public $egressProxyGatewayIds;

    /**
     * @var string[]
     */
    public $egressProxyGatewayNames;

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
    public $resourceGroupId;

    /**
     * @var int
     */
    public $skip;

    /**
     * @var string
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string[]
     */
    public $vpcIds;
    protected $_name = [
        'egressProxyConfigurationIds' => 'EgressProxyConfigurationIds',
        'egressProxyGatewayIds' => 'EgressProxyGatewayIds',
        'egressProxyGatewayNames' => 'EgressProxyGatewayNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'skip' => 'Skip',
        'status' => 'Status',
        'tag' => 'Tag',
        'vpcIds' => 'VpcIds',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyConfigurationIds)) {
            Model::validateArray($this->egressProxyConfigurationIds);
        }
        if (\is_array($this->egressProxyGatewayIds)) {
            Model::validateArray($this->egressProxyGatewayIds);
        }
        if (\is_array($this->egressProxyGatewayNames)) {
            Model::validateArray($this->egressProxyGatewayNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->vpcIds)) {
            Model::validateArray($this->vpcIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressProxyConfigurationIds) {
            if (\is_array($this->egressProxyConfigurationIds)) {
                $res['EgressProxyConfigurationIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyConfigurationIds as $item1) {
                    $res['EgressProxyConfigurationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->egressProxyGatewayIds) {
            if (\is_array($this->egressProxyGatewayIds)) {
                $res['EgressProxyGatewayIds'] = [];
                $n1 = 0;
                foreach ($this->egressProxyGatewayIds as $item1) {
                    $res['EgressProxyGatewayIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->egressProxyGatewayNames) {
            if (\is_array($this->egressProxyGatewayNames)) {
                $res['EgressProxyGatewayNames'] = [];
                $n1 = 0;
                foreach ($this->egressProxyGatewayNames as $item1) {
                    $res['EgressProxyGatewayNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
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

        if (null !== $this->vpcIds) {
            if (\is_array($this->vpcIds)) {
                $res['VpcIds'] = [];
                $n1 = 0;
                foreach ($this->vpcIds as $item1) {
                    $res['VpcIds'][$n1] = $item1;
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
        if (isset($map['EgressProxyConfigurationIds'])) {
            if (!empty($map['EgressProxyConfigurationIds'])) {
                $model->egressProxyConfigurationIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyConfigurationIds'] as $item1) {
                    $model->egressProxyConfigurationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EgressProxyGatewayIds'])) {
            if (!empty($map['EgressProxyGatewayIds'])) {
                $model->egressProxyGatewayIds = [];
                $n1 = 0;
                foreach ($map['EgressProxyGatewayIds'] as $item1) {
                    $model->egressProxyGatewayIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EgressProxyGatewayNames'])) {
            if (!empty($map['EgressProxyGatewayNames'])) {
                $model->egressProxyGatewayNames = [];
                $n1 = 0;
                foreach ($map['EgressProxyGatewayNames'] as $item1) {
                    $model->egressProxyGatewayNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
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

        if (isset($map['VpcIds'])) {
            if (!empty($map['VpcIds'])) {
                $model->vpcIds = [];
                $n1 = 0;
                foreach ($map['VpcIds'] as $item1) {
                    $model->vpcIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
