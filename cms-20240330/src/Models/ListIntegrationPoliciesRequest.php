<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPoliciesRequest\tag;

class ListIntegrationPoliciesRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $entityGroupIds;

    /**
     * @var string
     */
    public $filterRegionIds;

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
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyType;

    /**
     * @var string
     */
    public $prometheusInstanceId;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'addonName' => 'addonName',
        'entityGroupIds' => 'entityGroupIds',
        'filterRegionIds' => 'filterRegionIds',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'policyId' => 'policyId',
        'policyName' => 'policyName',
        'policyType' => 'policyType',
        'prometheusInstanceId' => 'prometheusInstanceId',
        'query' => 'query',
        'resourceGroupId' => 'resourceGroupId',
        'tag' => 'tag',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->entityGroupIds) {
            $res['entityGroupIds'] = $this->entityGroupIds;
        }

        if (null !== $this->filterRegionIds) {
            $res['filterRegionIds'] = $this->filterRegionIds;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['policyName'] = $this->policyName;
        }

        if (null !== $this->policyType) {
            $res['policyType'] = $this->policyType;
        }

        if (null !== $this->prometheusInstanceId) {
            $res['prometheusInstanceId'] = $this->prometheusInstanceId;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['addonName'])) {
            $model->addonName = $map['addonName'];
        }

        if (isset($map['entityGroupIds'])) {
            $model->entityGroupIds = $map['entityGroupIds'];
        }

        if (isset($map['filterRegionIds'])) {
            $model->filterRegionIds = $map['filterRegionIds'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['policyName'])) {
            $model->policyName = $map['policyName'];
        }

        if (isset($map['policyType'])) {
            $model->policyType = $map['policyType'];
        }

        if (isset($map['prometheusInstanceId'])) {
            $model->prometheusInstanceId = $map['prometheusInstanceId'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['tag'])) {
            if (!empty($map['tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
