<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata;

class metadata extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $recommendationLevel;

    /**
     * @var remediationMetadata
     */
    public $remediationMetadata;

    /**
     * @var resourceMetadata
     */
    public $resourceMetadata;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $stage;
    protected $_name = [
        'category' => 'Category',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'id' => 'Id',
        'recommendationLevel' => 'RecommendationLevel',
        'remediationMetadata' => 'RemediationMetadata',
        'resourceMetadata' => 'ResourceMetadata',
        'scope' => 'Scope',
        'stage' => 'Stage',
    ];

    public function validate()
    {
        if (null !== $this->remediationMetadata) {
            $this->remediationMetadata->validate();
        }
        if (null !== $this->resourceMetadata) {
            $this->resourceMetadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->recommendationLevel) {
            $res['RecommendationLevel'] = $this->recommendationLevel;
        }

        if (null !== $this->remediationMetadata) {
            $res['RemediationMetadata'] = null !== $this->remediationMetadata ? $this->remediationMetadata->toArray($noStream) : $this->remediationMetadata;
        }

        if (null !== $this->resourceMetadata) {
            $res['ResourceMetadata'] = null !== $this->resourceMetadata ? $this->resourceMetadata->toArray($noStream) : $this->resourceMetadata;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['RecommendationLevel'])) {
            $model->recommendationLevel = $map['RecommendationLevel'];
        }

        if (isset($map['RemediationMetadata'])) {
            $model->remediationMetadata = remediationMetadata::fromMap($map['RemediationMetadata']);
        }

        if (isset($map['ResourceMetadata'])) {
            $model->resourceMetadata = resourceMetadata::fromMap($map['ResourceMetadata']);
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }

        return $model;
    }
}
