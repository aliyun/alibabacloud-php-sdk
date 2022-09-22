<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeDiskReplicaPairsResponseBody\diskReplicaPairs;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairsResponseBody extends Model
{
    /**
     * @var diskReplicaPairs
     */
    public $diskReplicaPairs;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'diskReplicaPairs' => 'DiskReplicaPairs',
        'nextToken'        => 'NextToken',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskReplicaPairs) {
            $res['DiskReplicaPairs'] = null !== $this->diskReplicaPairs ? $this->diskReplicaPairs->toMap() : null;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DiskReplicaPairs'])) {
            $model->diskReplicaPairs = diskReplicaPairs::fromMap($map['DiskReplicaPairs']);
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
