<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeSourcesRequest;

use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @var bool
     */
    public $bindProject;

    /**
     * @example test
     *
     * @var string
     */
    public $keyword;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example MaxCompute
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bindProject' => 'BindProject',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindProject) {
            $res['BindProject'] = $this->bindProject;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindProject'])) {
            $model->bindProject = $map['BindProject'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
