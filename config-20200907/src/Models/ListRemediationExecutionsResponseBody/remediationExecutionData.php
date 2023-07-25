<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody;

use AlibabaCloud\SDK\Config\V20200907\Models\ListRemediationExecutionsResponseBody\remediationExecutionData\remediationExecutions;
use AlibabaCloud\Tea\Model;

class remediationExecutionData extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example cMbjqNaYs0Ps7zSNiu37****
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->remediationExecutions) {
            $res['RemediationExecutions'] = [];
            if (null !== $this->remediationExecutions && \is_array($this->remediationExecutions)) {
                $n = 0;
                foreach ($this->remediationExecutions as $item) {
                    $res['RemediationExecutions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return remediationExecutionData
     */
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
                $n                            = 0;
                foreach ($map['RemediationExecutions'] as $item) {
                    $model->remediationExecutions[$n++] = null !== $item ? remediationExecutions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
