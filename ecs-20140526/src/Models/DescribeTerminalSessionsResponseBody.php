<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions;
use AlibabaCloud\Tea\Model;

class DescribeTerminalSessionsResponseBody extends Model
{
    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of the sessions.
     *
     * @var sessions
     */
    public $sessions;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'sessions'  => 'Sessions',
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
        if (null !== $this->sessions) {
            $res['Sessions'] = null !== $this->sessions ? $this->sessions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTerminalSessionsResponseBody
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
        if (isset($map['Sessions'])) {
            $model->sessions = sessions::fromMap($map['Sessions']);
        }

        return $model;
    }
}
