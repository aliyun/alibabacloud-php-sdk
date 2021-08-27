<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDiskReplicaPairsResponseBody\diskReplicaPairs;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsResponseBody extends Model
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
     * @var diskReplicaPairs
     */
    public $diskReplicaPairs;
    protected $_name = [
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
        'diskReplicaPairs' => 'DiskReplicaPairs',
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
        if (null !== $this->diskReplicaPairs) {
            $res['DiskReplicaPairs'] = null !== $this->diskReplicaPairs ? $this->diskReplicaPairs->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairsResponseBody
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
        if (isset($map['DiskReplicaPairs'])) {
            $model->diskReplicaPairs = diskReplicaPairs::fromMap($map['DiskReplicaPairs']);
        }

        return $model;
    }
}
