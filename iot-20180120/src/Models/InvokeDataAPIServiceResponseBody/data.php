<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody\data\fieldNameList;
use AlibabaCloud\SDK\Iot\V20180120\Models\InvokeDataAPIServiceResponseBody\data\resultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example acs:iot:*:127103983461****:serveapi/device/getDeviceCountByStatus2
     *
     * @var string
     */
    public $apiSrn;

    /**
     * @var fieldNameList
     */
    public $fieldNameList;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageNo;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var resultList
     */
    public $resultList;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'apiSrn'        => 'ApiSrn',
        'fieldNameList' => 'FieldNameList',
        'pageNo'        => 'PageNo',
        'pageSize'      => 'PageSize',
        'resultList'    => 'ResultList',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->fieldNameList) {
            $res['FieldNameList'] = null !== $this->fieldNameList ? $this->fieldNameList->toMap() : null;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = null !== $this->resultList ? $this->resultList->toMap() : null;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['FieldNameList'])) {
            $model->fieldNameList = fieldNameList::fromMap($map['FieldNameList']);
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResultList'])) {
            $model->resultList = resultList::fromMap($map['ResultList']);
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
