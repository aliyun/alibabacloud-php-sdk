<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet;
use AlibabaCloud\Tea\Model;

class DescribeDisksFullStatusResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var diskFullStatusSet[]
     */
    public $diskFullStatusSet;
    protected $_name = [
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'pageNumber'        => 'PageNumber',
        'diskFullStatusSet' => 'DiskFullStatusSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->diskFullStatusSet) {
            $res['DiskFullStatusSet'] = [];
            if (null !== $this->diskFullStatusSet && \is_array($this->diskFullStatusSet)) {
                $n = 0;
                foreach ($this->diskFullStatusSet as $item) {
                    $res['DiskFullStatusSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisksFullStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['DiskFullStatusSet'])) {
            if (!empty($map['DiskFullStatusSet'])) {
                $model->diskFullStatusSet = [];
                $n                        = 0;
                foreach ($map['DiskFullStatusSet'] as $item) {
                    $model->diskFullStatusSet[$n++] = null !== $item ? diskFullStatusSet::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
