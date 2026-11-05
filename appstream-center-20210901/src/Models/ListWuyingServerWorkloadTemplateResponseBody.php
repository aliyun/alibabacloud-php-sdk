<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListWuyingServerWorkloadTemplateResponseBody\workloadTemplates;

class ListWuyingServerWorkloadTemplateResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var workloadTemplates[]
     */
    public $workloadTemplates;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'workloadTemplates' => 'WorkloadTemplates',
    ];

    public function validate()
    {
        if (\is_array($this->workloadTemplates)) {
            Model::validateArray($this->workloadTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->workloadTemplates) {
            if (\is_array($this->workloadTemplates)) {
                $res['WorkloadTemplates'] = [];
                $n1 = 0;
                foreach ($this->workloadTemplates as $item1) {
                    $res['WorkloadTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WorkloadTemplates'])) {
            if (!empty($map['WorkloadTemplates'])) {
                $model->workloadTemplates = [];
                $n1 = 0;
                foreach ($map['WorkloadTemplates'] as $item1) {
                    $model->workloadTemplates[$n1] = workloadTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
