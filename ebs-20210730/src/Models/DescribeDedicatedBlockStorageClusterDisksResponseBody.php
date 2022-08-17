<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDedicatedBlockStorageClusterDisksResponseBody\disks;
use AlibabaCloud\Tea\Model;

class DescribeDedicatedBlockStorageClusterDisksResponseBody extends Model
{
    /**
     * @var disks
     */
    public $disks;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disks'     => 'Disks',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disks) {
            $res['Disks'] = null !== $this->disks ? $this->disks->toMap() : null;
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
     * @return DescribeDedicatedBlockStorageClusterDisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disks'])) {
            $model->disks = disks::fromMap($map['Disks']);
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
