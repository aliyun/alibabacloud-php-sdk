<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models;

use AlibabaCloud\Tea\Model;

class DescribeNewPlayVideoPlaySessionEventDetailRequest extends Model
{
    /**
     * @var int
     */
    public $bizDate;

    /**
     * @var string
     */
    public $inputStatus;

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
    public $VPS;
    protected $_name = [
        'bizDate'     => 'BizDate',
        'inputStatus' => 'InputStatus',
        'pageNum'     => 'PageNum',
        'pageSize'    => 'PageSize',
        'VPS'         => 'VPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->inputStatus) {
            $res['InputStatus'] = $this->inputStatus;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->VPS) {
            $res['VPS'] = $this->VPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNewPlayVideoPlaySessionEventDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['InputStatus'])) {
            $model->inputStatus = $map['InputStatus'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['VPS'])) {
            $model->VPS = $map['VPS'];
        }

        return $model;
    }
}
