<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\ListApplicationGroupsResponseBody\applicationGroups;

class ListApplicationGroupsResponseBody extends Model
{
    /**
     * @var applicationGroups[]
     */
    public $applicationGroups;

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
    protected $_name = [
        'applicationGroups' => 'ApplicationGroups',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationGroups)) {
            Model::validateArray($this->applicationGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationGroups) {
            if (\is_array($this->applicationGroups)) {
                $res['ApplicationGroups'] = [];
                $n1 = 0;
                foreach ($this->applicationGroups as $item1) {
                    $res['ApplicationGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApplicationGroups'])) {
            if (!empty($map['ApplicationGroups'])) {
                $model->applicationGroups = [];
                $n1 = 0;
                foreach ($map['ApplicationGroups'] as $item1) {
                    $model->applicationGroups[$n1] = applicationGroups::fromMap($item1);
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

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
