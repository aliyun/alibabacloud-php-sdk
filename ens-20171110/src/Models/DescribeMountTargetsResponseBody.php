<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMountTargetsResponseBody\mountTargets;
use AlibabaCloud\Tea\Model;

class DescribeMountTargetsResponseBody extends Model
{
    /**
     * @description The information about mount targets.
     *
     * @var mountTargets[]
     */
    public $mountTargets;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 762DD527-358B-1E48-8005-CCE3ED4EB9E0
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of mount targets.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'mountTargets' => 'MountTargets',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = [];
            if (null !== $this->mountTargets && \is_array($this->mountTargets)) {
                $n = 0;
                foreach ($this->mountTargets as $item) {
                    $res['MountTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
     * @return DescribeMountTargetsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountTargets'])) {
            if (!empty($map['MountTargets'])) {
                $model->mountTargets = [];
                $n                   = 0;
                foreach ($map['MountTargets'] as $item) {
                    $model->mountTargets[$n++] = null !== $item ? mountTargets::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
