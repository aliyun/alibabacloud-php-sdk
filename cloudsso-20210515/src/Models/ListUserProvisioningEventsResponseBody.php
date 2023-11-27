<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\SDK\Cloudsso\V20210515\Models\ListUserProvisioningEventsResponseBody\userProvisioningEvents;
use AlibabaCloud\Tea\Model;

class ListUserProvisioningEventsResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 2eEMmhmLa1b7Bbj9UzCgZUGj8DpDeG5TbNknuNKNP2h84KjJRnAb7vzzSDkYNmsidnAybyJYBfnPPB6xfgw54B1Wub2KQmC8LofzqBW2Y****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 0D85B43D-EF98-396D-B426-837E428D2D39
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 110
     *
     * @var int
     */
    public $totalCounts;

    /**
     * @var userProvisioningEvents[]
     */
    public $userProvisioningEvents;
    protected $_name = [
        'isTruncated'            => 'IsTruncated',
        'maxResults'             => 'MaxResults',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'totalCounts'            => 'TotalCounts',
        'userProvisioningEvents' => 'UserProvisioningEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
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
        if (null !== $this->totalCounts) {
            $res['TotalCounts'] = $this->totalCounts;
        }
        if (null !== $this->userProvisioningEvents) {
            $res['UserProvisioningEvents'] = [];
            if (null !== $this->userProvisioningEvents && \is_array($this->userProvisioningEvents)) {
                $n = 0;
                foreach ($this->userProvisioningEvents as $item) {
                    $res['UserProvisioningEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserProvisioningEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
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
        if (isset($map['TotalCounts'])) {
            $model->totalCounts = $map['TotalCounts'];
        }
        if (isset($map['UserProvisioningEvents'])) {
            if (!empty($map['UserProvisioningEvents'])) {
                $model->userProvisioningEvents = [];
                $n                             = 0;
                foreach ($map['UserProvisioningEvents'] as $item) {
                    $model->userProvisioningEvents[$n++] = null !== $item ? userProvisioningEvents::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
