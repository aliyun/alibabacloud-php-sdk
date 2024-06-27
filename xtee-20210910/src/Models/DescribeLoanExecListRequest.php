<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeLoanExecListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $batchNo;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $monitorObj;

    /**
     * @var string
     */
    public $monitorStatus;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'          => 'Lang',
        'batchNo'       => 'batchNo',
        'currentPage'   => 'currentPage',
        'monitorObj'    => 'monitorObj',
        'monitorStatus' => 'monitorStatus',
        'pageSize'      => 'pageSize',
        'regId'         => 'regId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->batchNo) {
            $res['batchNo'] = $this->batchNo;
        }
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->monitorObj) {
            $res['monitorObj'] = $this->monitorObj;
        }
        if (null !== $this->monitorStatus) {
            $res['monitorStatus'] = $this->monitorStatus;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLoanExecListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['batchNo'])) {
            $model->batchNo = $map['batchNo'];
        }
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['monitorObj'])) {
            $model->monitorObj = $map['monitorObj'];
        }
        if (isset($map['monitorStatus'])) {
            $model->monitorStatus = $map['monitorStatus'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
