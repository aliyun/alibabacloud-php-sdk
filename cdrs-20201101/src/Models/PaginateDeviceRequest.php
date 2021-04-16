<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class PaginateDeviceRequest extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $countTotalNum;

    /**
     * @var string
     */
    public $corpId;
    protected $_name = [
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'countTotalNum' => 'CountTotalNum',
        'corpId'        => 'CorpId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->countTotalNum) {
            $res['CountTotalNum'] = $this->countTotalNum;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaginateDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CountTotalNum'])) {
            $model->countTotalNum = $map['CountTotalNum'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }

        return $model;
    }
}
