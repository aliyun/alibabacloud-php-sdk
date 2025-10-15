<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListIntegrationPoliciesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var string
     */
    public $bindResourceId;

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
     * @var string
     */
    public $tagShrink;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'addonName' => 'addonName',
        'bindResourceId' => 'bindResourceId',
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
        'tagShrink' => 'tag',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->bindResourceId) {
            $res['bindResourceId'] = $this->bindResourceId;
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

        if (null !== $this->tagShrink) {
            $res['tag'] = $this->tagShrink;
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

        if (isset($map['bindResourceId'])) {
            $model->bindResourceId = $map['bindResourceId'];
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
            $model->tagShrink = $map['tag'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
