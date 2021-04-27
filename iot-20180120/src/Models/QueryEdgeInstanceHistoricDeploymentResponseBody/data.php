<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceHistoricDeploymentResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceHistoricDeploymentResponseBody\data\deploymentList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var deploymentList[]
     */
    public $deploymentList;
    protected $_name = [
        'total'          => 'Total',
        'pageSize'       => 'PageSize',
        'currentPage'    => 'CurrentPage',
        'deploymentList' => 'DeploymentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->deploymentList) {
            $res['DeploymentList'] = [];
            if (null !== $this->deploymentList && \is_array($this->deploymentList)) {
                $n = 0;
                foreach ($this->deploymentList as $item) {
                    $res['DeploymentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DeploymentList'])) {
            if (!empty($map['DeploymentList'])) {
                $model->deploymentList = [];
                $n                     = 0;
                foreach ($map['DeploymentList'] as $item) {
                    $model->deploymentList[$n++] = null !== $item ? deploymentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
