<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsResponseBody\containerApps;
use AlibabaCloud\Tea\Model;

class ListContainerAppsResponseBody extends Model
{
    /**
     * @var containerApps[]
     */
    public $containerApps;

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
    protected $_name = [
        'containerApps' => 'ContainerApps',
        'totalCount'    => 'TotalCount',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'pageNumber'    => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerApps) {
            $res['ContainerApps'] = [];
            if (null !== $this->containerApps && \is_array($this->containerApps)) {
                $n = 0;
                foreach ($this->containerApps as $item) {
                    $res['ContainerApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListContainerAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerApps'])) {
            if (!empty($map['ContainerApps'])) {
                $model->containerApps = [];
                $n                    = 0;
                foreach ($map['ContainerApps'] as $item) {
                    $model->containerApps[$n++] = null !== $item ? containerApps::fromMap($item) : $item;
                }
            }
        }
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

        return $model;
    }
}
