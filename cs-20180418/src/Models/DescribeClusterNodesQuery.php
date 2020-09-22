<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20180418\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNodesQuery extends Model
{
    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pageNumber;
    protected $_name = [
        'pageSize'   => 'pageSize',
        'pageNumber' => 'pageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        return $model;
    }
}
