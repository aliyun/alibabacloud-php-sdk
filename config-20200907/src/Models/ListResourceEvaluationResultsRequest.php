<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class ListResourceEvaluationResultsRequest extends Model
{
    /**
     * @description The compliance evaluation result of the resources. Valid values:
     *
     *   COMPLIANT: The resources are evaluated as compliant.
     *   NON_COMPLIANT: The resources are evaluated as incompliant.
     *   NOT_APPLICABLE: The rule does not apply to your resources.
     *   INSUFFICIENT_DATA: No resource data is available.
     *   IGNORED: The resource is ignored during compliance evaluation.
     *
     * @example NON_COMPLIANT
     *
     * @var string
     */
    public $complianceType;

    /**
     * @description The maximum number of entries to return for a single request. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that you want to use to initiate the current request. If the response of the previous request is truncated, you can use this token to initiate another request and obtain the remaining entries.``
     *
     * @example IWBjqMYSy0is7zSMGu16****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where one or more resources you want to query reside. For example, the value `global` indicates global regions and the value `cn-hangzhou` indicates the China (Hangzhou) region.
     *
     * For more information about how to obtain the ID of the region where a resource resides, see [ListDiscoveredResources](~~169620~~).
     * @example global
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the resource.
     *
     * For more information about how to obtain the ID of a resource, see [ListDiscoveredResources](~~169620~~).
     * @example 23642660635396****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * For more information about how to query the type of a resource, see [ListDiscoveredResources](~~169620~~).
     * @example ACS::RAM::User
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'region'         => 'Region',
        'resourceId'     => 'ResourceId',
        'resourceType'   => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceEvaluationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
