<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DFS\V20180620\Models\DescribeVscMountPointsResponseBody\mountPoints;

class DescribeVscMountPointsResponseBody extends Model
{
    /**
     * @var mountPoints[]
     */
    public $mountPoints;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'mountPoints' => 'MountPoints',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->mountPoints)) {
            Model::validateArray($this->mountPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPoints) {
            if (\is_array($this->mountPoints)) {
                $res['MountPoints'] = [];
                $n1 = 0;
                foreach ($this->mountPoints as $item1) {
                    $res['MountPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['MountPoints'])) {
            if (!empty($map['MountPoints'])) {
                $model->mountPoints = [];
                $n1 = 0;
                foreach ($map['MountPoints'] as $item1) {
                    $model->mountPoints[$n1] = mountPoints::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
