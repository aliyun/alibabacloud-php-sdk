<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions;
use AlibabaCloud\Tea\Model;

class ListTrafficMirrorSessionsResponseBody extends Model
{
    /**
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 739CA01C-92EB-4C69-BCC0-280149C6F41E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
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
