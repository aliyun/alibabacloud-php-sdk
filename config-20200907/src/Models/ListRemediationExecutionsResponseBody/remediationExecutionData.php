<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody\remediationExecutionData\remediationExecutions;

class remediationExecutionData extends Model
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
     * @var remediationExecutions[]
     */
    public $remediationExecutions;
    protected $_name = [
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'remediationExecutions' => 'RemediationExecutions',
    ];

    public function validate()
    {
        if (\is_array($this->remediationExecutions)) {
            Model::validateArray($this->remediationExecutions);
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

        if (null !== $this->remediationExecutions) {
            if (\is_array($this->remediationExecutions)) {
                $res['RemediationExecutions'] = [];
                $n1                           = 0;
                foreach ($this->remediationExecutions as $item1) {
                    $res['RemediationExecutions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['RemediationExecutions'])) {
            if (!empty($map['RemediationExecutions'])) {
                $model->remediationExecutions = [];
                $n1                           = 0;
                foreach ($map['RemediationExecutions'] as $item1) {
                    $model->remediationExecutions[$n1++] = remediationExecutions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
