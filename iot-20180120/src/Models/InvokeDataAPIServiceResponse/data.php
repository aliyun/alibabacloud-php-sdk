<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponse\data\fieldNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponse\data\resultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiSrn;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var fieldNameList
     */
    public $fieldNameList;

    /**
     * @var resultList
     */
    public $resultList;
    protected $_name = [
        'apiSrn'        => 'ApiSrn',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'totalSize'     => 'TotalSize',
        'fieldNameList' => 'FieldNameList',
        'resultList'    => 'ResultList',
    ];

    public function validate()
    {
        Model::validateRequired('apiSrn', $this->apiSrn, true);
        Model::validateRequired('pageNo', $this->pageNo, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalSize', $this->totalSize, true);
        Model::validateRequired('fieldNameList', $this->fieldNameList, true);
        Model::validateRequired('resultList', $this->resultList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->fieldNameList) {
            $res['FieldNameList'] = null !== $this->fieldNameList ? $this->fieldNameList->toMap() : null;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = null !== $this->resultList ? $this->resultList->toMap() : null;
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
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['FieldNameList'])) {
            $model->fieldNameList = fieldNameList::fromMap($map['FieldNameList']);
        }
        if (isset($map['ResultList'])) {
            $model->resultList = resultList::fromMap($map['ResultList']);
        }

        return $model;
    }
}
