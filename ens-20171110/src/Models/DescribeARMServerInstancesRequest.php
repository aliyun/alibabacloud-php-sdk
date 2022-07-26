<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeARMServerInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $ensRegionIds;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $serverIds;
    protected $_name = [
        'ensRegionIds' => 'EnsRegionIds',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'serverIds'    => 'ServerIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeARMServerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionIds'])) {
            if (!empty($map['EnsRegionIds'])) {
                $model->ensRegionIds = $map['EnsRegionIds'];
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }

        return $model;
    }
}
