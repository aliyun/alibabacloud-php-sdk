<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody\resourceComplianceTimeline\complianceList;
use AlibabaCloud\Tea\Model;

class resourceComplianceTimeline extends Model
{
    /**
     * @description The status of the resource. The parameter value varies based on the resource type and may be left empty. Examples:
     *
     *   If the value of the ResourceType parameter is ACS::ECS::Instance, the resource is an Elastic Compute Service (ECS) instance that has a specific state. In this case, the valid values of this parameter are Running and Stopped.
     *   If the value of the ResourceType parameter is ACS::OSS::Bucket, the resource is an Object Storage Service (OSS) bucket that is not in a specific state. In this case, this parameter is empty.
     *
     * @var complianceList[]
     */
    public $complianceList;

    /**
     * @description The maximum number of entries returned for a single request.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example 5OVS5J4I1/UKTkHV5oNs****
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'complianceList' => 'ComplianceList',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceList) {
            $res['ComplianceList'] = [];
            if (null !== $this->complianceList && \is_array($this->complianceList)) {
                $n = 0;
                foreach ($this->complianceList as $item) {
                    $res['ComplianceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceComplianceTimeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceList'])) {
            if (!empty($map['ComplianceList'])) {
                $model->complianceList = [];
                $n                     = 0;
                foreach ($map['ComplianceList'] as $item) {
                    $model->complianceList[$n++] = null !== $item ? complianceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
