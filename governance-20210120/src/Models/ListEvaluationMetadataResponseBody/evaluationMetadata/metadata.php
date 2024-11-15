<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\resourceMetadata;
use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @description The category of the check item.
     *
     * @example Security
     *
     * @var string
     */
    public $category;

    /**
     * @description The description of the check item.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the check item.
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The ID of the metadata.
     *
     * @example pxgtda****
     *
     * @var string
     */
    public $id;

    /**
     * @description The governance level of the check item.
     *
     * @example High
     *
     * @var string
     */
    public $recommendationLevel;

    /**
     * @description The metadata of the fixing task.
     *
     * @var remediationMetadata
     */
    public $remediationMetadata;

    /**
     * @description The metadata of the checked resources.
     *
     * @var resourceMetadata
     */
    public $resourceMetadata;

    /**
     * @description The scope of the check item. Valid values:
     *
     *   Account: the check item in a single-account governance maturity check
     *   ResourceDirectory: the check item in a multi-account governance maturity check
     *
     * @example Account
     *
     * @var string
     */
    public $scope;

    /**
     * @description The status of the check item. Valid values:
     *
     *   Released: The check item is released.
     *   Beta: The check item is pre-released.
     *
     * @example Released
     *
     * @var string
     */
    public $stage;
    protected $_name = [
        'category'            => 'Category',
        'description'         => 'Description',
        'displayName'         => 'DisplayName',
        'id'                  => 'Id',
        'recommendationLevel' => 'RecommendationLevel',
        'remediationMetadata' => 'RemediationMetadata',
        'resourceMetadata'    => 'ResourceMetadata',
        'scope'               => 'Scope',
        'stage'               => 'Stage',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['RemediationMetadata'] = null !== $this->remediationMetadata ? $this->remediationMetadata->toMap() : null;
        }
        if (null !== $this->resourceMetadata) {
            $res['ResourceMetadata'] = null !== $this->resourceMetadata ? $this->resourceMetadata->toMap() : null;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadata
     */
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
