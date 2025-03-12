<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSnapshotsResponseBody\snapshots;
use AlibabaCloud\Tea\Model;

class DescribeSnapshotsResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB393****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the backup snapshots.
     *
     * @var snapshots[]
     */
    public $snapshots;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
        'snapshots' => 'Snapshots',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSnapshotsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
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

        return $model;
    }
}
