<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOpaClusterNamespaceListRequest extends Model
{
    /**
     * @description The ID of the cluster that you want to query.
     *
     * >  You can call the [DescribeGroupedContainerInstances](~~DescribeGroupedContainerInstances~~) operation to query the IDs of clusters.
     * @example ca0faf43e33904ecbb6c695df7906****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The name of the namespace.
     *
     * @example sit
     *
     * @var string
     */
    public $nameSpaceName;

    /**
     * @description The number of entries per page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'currentPage'   => 'CurrentPage',
        'nameSpaceName' => 'NameSpaceName',
        'pageSize'      => 'PageSize',
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
        if (null !== $this->nameSpaceName) {
            $res['NameSpaceName'] = $this->nameSpaceName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpaClusterNamespaceListRequest
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
        if (isset($map['NameSpaceName'])) {
            $model->nameSpaceName = $map['NameSpaceName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
