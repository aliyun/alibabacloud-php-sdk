<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponseBody;

use AlibabaCloud\SDK\Config\V20190108\Models\GetResourceComplianceTimelineResponseBody\resourceComplianceTimeline\complianceList;
use AlibabaCloud\Tea\Model;

class resourceComplianceTimeline extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var complianceList[]
     */
    public $complianceList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'limit'          => 'Limit',
        'complianceList' => 'ComplianceList',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->complianceList) {
            $res['ComplianceList'] = [];
            if (null !== $this->complianceList && \is_array($this->complianceList)) {
                $n = 0;
                foreach ($this->complianceList as $item) {
                    $res['ComplianceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['ComplianceList'])) {
            if (!empty($map['ComplianceList'])) {
                $model->complianceList = [];
                $n                     = 0;
                foreach ($map['ComplianceList'] as $item) {
                    $model->complianceList[$n++] = null !== $item ? complianceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
