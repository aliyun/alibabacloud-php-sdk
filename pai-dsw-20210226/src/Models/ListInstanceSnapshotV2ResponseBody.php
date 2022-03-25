<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\SDK\Paidsw\V20210226\Models\ListInstanceSnapshotV2ResponseBody\snapshots;
use AlibabaCloud\Tea\Model;

class ListInstanceSnapshotV2ResponseBody extends Model
{
    /**
     * @description 请求Id
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 本分页中请求的实例镜像列表
     *
     * @var snapshots[]
     */
    public $snapshots;

    /**
     * @description 实例总数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'snapshots'  => 'Snapshots',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = [];
            if (null !== $this->snapshots && \is_array($this->snapshots)) {
                $n = 0;
                foreach ($this->snapshots as $item) {
                    $res['Snapshots'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceSnapshotV2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Snapshots'])) {
            if (!empty($map['Snapshots'])) {
                $model->snapshots = [];
                $n                = 0;
                foreach ($map['Snapshots'] as $item) {
                    $model->snapshots[$n++] = null !== $item ? snapshots::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
