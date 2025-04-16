<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions;

class DescribeTerminalSessionsResponseBody extends Model
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
     * @var sessions
     */
    public $sessions;
    protected $_name = [
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'sessions' => 'Sessions',
    ];

    public function validate()
    {
        if (null !== $this->sessions) {
            $this->sessions->validate();
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

        if (null !== $this->sessions) {
            $res['Sessions'] = null !== $this->sessions ? $this->sessions->toArray($noStream) : $this->sessions;
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

        if (isset($map['Sessions'])) {
            $model->sessions = sessions::fromMap($map['Sessions']);
        }

        return $model;
    }
}
