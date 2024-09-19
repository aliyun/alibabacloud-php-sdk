<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponseBody\pagingInfo\deployments;
use AlibabaCloud\Tea\Model;

class pagingInfo extends Model
{
    /**
     * @var deployments[]
     */
    public $deployments;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 2524
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'deployments' => 'Deployments',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployments) {
            $res['Deployments'] = [];
            if (null !== $this->deployments && \is_array($this->deployments)) {
                $n = 0;
                foreach ($this->deployments as $item) {
                    $res['Deployments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
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
     * @return pagingInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deployments'])) {
            if (!empty($map['Deployments'])) {
                $model->deployments = [];
                $n                  = 0;
                foreach ($map['Deployments'] as $item) {
                    $model->deployments[$n++] = null !== $item ? deployments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
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
