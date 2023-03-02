<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDeploymentsResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDeploymentsResponseBody\data\deployments;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The information about the deployment tasks.
     *
     * @var deployments[]
     */
    public $deployments;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The total number of entries returned.
     *
     * @example 13
     *
     * @var int
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
     * @return data
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
