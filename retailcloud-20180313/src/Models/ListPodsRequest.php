<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ListPodsRequest extends Model
{
    /**
     * @var int
     */
    public $deployOrderId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $resultList;

    /**
     * @var int[]
     */
    public $statusList;
    protected $_name = [
        'deployOrderId' => 'DeployOrderId',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'resultList'    => 'ResultList',
        'statusList'    => 'StatusList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployOrderId) {
            $res['DeployOrderId'] = $this->deployOrderId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = $this->resultList;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPodsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployOrderId'])) {
            $model->deployOrderId = $map['DeployOrderId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = $map['ResultList'];
            }
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }

        return $model;
    }
}
