<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeLensMonitorDisksResponseBody\diskInfos;
use AlibabaCloud\Tea\Model;

class DescribeLensMonitorDisksResponseBody extends Model
{
    /**
     * @description Cloud disk information list.
     *
     * @var diskInfos[]
     */
    public $diskInfos;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results.
     *
     * @example caeba0bbb2be03f84eb48b699f0a****
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
     * @description The total number of entries returned.
     *
     * @example 6
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'diskInfos'  => 'DiskInfos',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskInfos) {
            $res['DiskInfos'] = [];
            if (null !== $this->diskInfos && \is_array($this->diskInfos)) {
                $n = 0;
                foreach ($this->diskInfos as $item) {
                    $res['DiskInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLensMonitorDisksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskInfos'])) {
            if (!empty($map['DiskInfos'])) {
                $model->diskInfos = [];
                $n                = 0;
                foreach ($map['DiskInfos'] as $item) {
                    $model->diskInfos[$n++] = null !== $item ? diskInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
