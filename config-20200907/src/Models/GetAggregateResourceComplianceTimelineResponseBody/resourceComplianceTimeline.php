<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\GetAggregateResourceComplianceTimelineResponseBody\resourceComplianceTimeline\complianceList;
use AlibabaCloud\Tea\Model;

class resourceComplianceTimeline extends Model
{
    /**
     * @description The compliance evaluation records on the compliance timeline.
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
     * @description The token that is used to initiate the next request.
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
