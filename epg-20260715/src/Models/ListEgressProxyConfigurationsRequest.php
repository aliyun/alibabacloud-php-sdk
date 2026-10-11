<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EPG\V20260715\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EPG\V20260715\Models\ListEgressProxyConfigurationsRequest\tag;

class ListEgressProxyConfigurationsRequest extends Model
{
    /**
     * @var string[]
     */
    public $egressProxyConfigurationIds;

    /**
     * @var string[]
     */
    public $egressProxyConfigurationNames;

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
    protected $_name = [
        'egressProxyConfigurationIds' => 'EgressProxyConfigurationIds',
        'egressProxyConfigurationNames' => 'EgressProxyConfigurationNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'resourceGroupId' => 'ResourceGroupId',
        'skip' => 'Skip',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->egressProxyConfigurationIds)) {
            Model::validateArray($this->egressProxyConfigurationIds);
        }
        if (\is_array($this->egressProxyConfigurationNames)) {
            Model::validateArray($this->egressProxyConfigurationNames);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
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

        if (null !== $this->egressProxyConfigurationNames) {
            if (\is_array($this->egressProxyConfigurationNames)) {
                $res['EgressProxyConfigurationNames'] = [];
                $n1 = 0;
                foreach ($this->egressProxyConfigurationNames as $item1) {
                    $res['EgressProxyConfigurationNames'][$n1] = $item1;
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

        if (isset($map['EgressProxyConfigurationNames'])) {
            if (!empty($map['EgressProxyConfigurationNames'])) {
                $model->egressProxyConfigurationNames = [];
                $n1 = 0;
                foreach ($map['EgressProxyConfigurationNames'] as $item1) {
                    $model->egressProxyConfigurationNames[$n1] = $item1;
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

        return $model;
    }
}
