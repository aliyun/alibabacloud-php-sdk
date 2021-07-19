<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsResponseBody\applicationGroups;
use AlibabaCloud\Tea\Model;

class ListApplicationGroupsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var applicationGroups[]
     */
    public $applicationGroups;
    protected $_name = [
        'nextToken'         => 'NextToken',
        'requestId'         => 'RequestId',
        'maxResults'        => 'MaxResults',
        'applicationGroups' => 'ApplicationGroups',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->applicationGroups) {
            $res['ApplicationGroups'] = [];
            if (null !== $this->applicationGroups && \is_array($this->applicationGroups)) {
                $n = 0;
                foreach ($this->applicationGroups as $item) {
                    $res['ApplicationGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['ApplicationGroups'])) {
            if (!empty($map['ApplicationGroups'])) {
                $model->applicationGroups = [];
                $n                        = 0;
                foreach ($map['ApplicationGroups'] as $item) {
                    $model->applicationGroups[$n++] = null !== $item ? applicationGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
