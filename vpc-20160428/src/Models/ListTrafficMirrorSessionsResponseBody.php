<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsResponseBody\trafficMirrorSessions;

class ListTrafficMirrorSessionsResponseBody extends Model
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
        if (\is_array($this->trafficMirrorSessions)) {
            Model::validateArray($this->trafficMirrorSessions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->trafficMirrorSessions)) {
                $res['TrafficMirrorSessions'] = [];
                $n1                           = 0;
                foreach ($this->trafficMirrorSessions as $item1) {
                    $res['TrafficMirrorSessions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1                           = 0;
                foreach ($map['TrafficMirrorSessions'] as $item1) {
                    $model->trafficMirrorSessions[$n1++] = trafficMirrorSessions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
