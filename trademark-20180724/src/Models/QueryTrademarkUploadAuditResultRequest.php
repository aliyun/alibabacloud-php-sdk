<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryTrademarkUploadAuditResultRequest extends Model
{
    /**
     * @var string
     */
    public $classification;

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
    public $registerCode;

    /**
     * @var string
     */
    public $registerNumber;

    /**
     * @var string
     */
    public $tmType;
    protected $_name = [
        'classification' => 'Classification',
        'pageNum'        => 'PageNum',
        'pageSize'       => 'PageSize',
        'registerCode'   => 'RegisterCode',
        'registerNumber' => 'RegisterNumber',
        'tmType'         => 'TmType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->registerCode) {
            $res['RegisterCode'] = $this->registerCode;
        }
        if (null !== $this->registerNumber) {
            $res['RegisterNumber'] = $this->registerNumber;
        }
        if (null !== $this->tmType) {
            $res['TmType'] = $this->tmType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTrademarkUploadAuditResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegisterCode'])) {
            $model->registerCode = $map['RegisterCode'];
        }
        if (isset($map['RegisterNumber'])) {
            $model->registerNumber = $map['RegisterNumber'];
        }
        if (isset($map['TmType'])) {
            $model->tmType = $map['TmType'];
        }

        return $model;
    }
}
