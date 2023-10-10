<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListClusterMembersRequest extends Model
{
    /**
     * @description The ID of the cluster. You can call the ListCluster operation to query the cluster ID. For more information, see [ListCluster](~~154995~~).
     *
     * @example 52984524-6d48-4bbd-85f2-a34b0e5b****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return. If you do not specify this parameter, the first page is returned.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The number of ECS instances.
     *
     * @example 1
     *
     * @var string
     */
    public $ecsList;

    /**
     * @description The number of ECS instances to return on each page. If you do not specify this parameter, all ECS instances in the specified cluster are returned on one page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'ecsList'     => 'EcsList',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ecsList) {
            $res['EcsList'] = $this->ecsList;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClusterMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EcsList'])) {
            $model->ecsList = $map['EcsList'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
