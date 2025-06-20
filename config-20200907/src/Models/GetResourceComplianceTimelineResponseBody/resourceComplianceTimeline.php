<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceTimelineResponseBody\resourceComplianceTimeline\complianceList;

class resourceComplianceTimeline extends Model
{
    /**
     * @var complianceList[]
     */
    public $complianceList;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'complianceList' => 'ComplianceList',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
        if (\is_array($this->complianceList)) {
            Model::validateArray($this->complianceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complianceList) {
            if (\is_array($this->complianceList)) {
                $res['ComplianceList'] = [];
                $n1 = 0;
                foreach ($this->complianceList as $item1) {
                    $res['ComplianceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceList'])) {
            if (!empty($map['ComplianceList'])) {
                $model->complianceList = [];
                $n1 = 0;
                foreach ($map['ComplianceList'] as $item1) {
                    $model->complianceList[$n1] = complianceList::fromMap($item1);
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

        return $model;
    }
}
