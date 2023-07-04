<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions;
use AlibabaCloud\Tea\Model;

class ListTrafficMirrorSessionsResponseBody extends Model
{
    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If no value is returned for **NextToken**, no next queries are sent.
     *   If a value of **NextToken** is returned, the value is the token that is used for the subsequent query.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 739CA01C-92EB-4C69-BCC0-280149C6F41E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The details about the traffic mirror session.
     *
     * @var trafficMirrorSessions[]
     */
    public $trafficMirrorSessions;
    protected $_name = [
        'nextToken'             => 'NextToken',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
        'trafficMirrorSessions' => 'TrafficMirrorSessions',
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trafficMirrorSessions) {
            $res['TrafficMirrorSessions'] = [];
            if (null !== $this->trafficMirrorSessions && \is_array($this->trafficMirrorSessions)) {
                $n = 0;
                foreach ($this->trafficMirrorSessions as $item) {
                    $res['TrafficMirrorSessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMirrorSessionsResponseBody
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrafficMirrorSessions'])) {
            if (!empty($map['TrafficMirrorSessions'])) {
                $model->trafficMirrorSessions = [];
                $n                            = 0;
                foreach ($map['TrafficMirrorSessions'] as $item) {
                    $model->trafficMirrorSessions[$n++] = null !== $item ? trafficMirrorSessions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
