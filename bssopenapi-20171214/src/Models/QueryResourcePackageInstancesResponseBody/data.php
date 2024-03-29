<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryResourcePackageInstancesResponseBody\data\instances;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the host.
     *
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @description The details of the instances.
     *
     * @var instances
     */
    public $instances;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNum;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The total number of returned entries.
     *
     * @example 12
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'hostId'     => 'HostId',
        'instances'  => 'Instances',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
