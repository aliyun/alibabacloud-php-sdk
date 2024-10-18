<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class ListClustersShrinkRequest extends Model
{
    /**
     * @description The cluster IDs. You can specify up to 20 IDs.
     *
     * @var string
     */
    public $clusterIdsShrink;

    /**
     * @description The cluster names. You can specify up to 20 names.
     *
     * @var string
     */
    public $clusterNamesShrink;

    /**
     * @description The page number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 10 to 100. Default value: 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterIdsShrink'   => 'ClusterIds',
        'clusterNamesShrink' => 'ClusterNames',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIdsShrink) {
            $res['ClusterIds'] = $this->clusterIdsShrink;
        }
        if (null !== $this->clusterNamesShrink) {
            $res['ClusterNames'] = $this->clusterNamesShrink;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListClustersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIdsShrink = $map['ClusterIds'];
        }
        if (isset($map['ClusterNames'])) {
            $model->clusterNamesShrink = $map['ClusterNames'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
