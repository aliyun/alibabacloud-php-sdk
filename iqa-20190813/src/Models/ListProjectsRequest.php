<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class ListProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $filterParam;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $projectType;
    protected $_name = [
        'filterParam' => 'FilterParam',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectType' => 'ProjectType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterParam) {
            $res['FilterParam'] = $this->filterParam;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterParam'])) {
            $model->filterParam = $map['FilterParam'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }

        return $model;
    }
}
