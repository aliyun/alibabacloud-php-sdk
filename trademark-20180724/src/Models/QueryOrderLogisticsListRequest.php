<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderLogisticsListRequest extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $produceOrderId;

    /**
     * @var string
     */
    public $registerNumber;
    protected $_name = [
        'fileType'       => 'FileType',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'produceOrderId' => 'ProduceOrderId',
        'registerNumber' => 'RegisterNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->produceOrderId) {
            $res['ProduceOrderId'] = $this->produceOrderId;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderLogisticsListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProduceOrderId'])) {
            $model->produceOrderId = $map['ProduceOrderId'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }

        return $model;
    }
}
