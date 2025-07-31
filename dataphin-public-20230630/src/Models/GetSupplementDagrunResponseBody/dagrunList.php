<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetSupplementDagrunResponseBody;

use AlibabaCloud\Tea\Model;

class dagrunList extends Model
{
    /**
     * @example 2024-04-01
     *
     * @var string
     */
    public $bizDate;

    /**
     * @example 60s
     *
     * @var string
     */
    public $duration;

    /**
     * @example 1717081789000
     *
     * @var int
     */
    public $endExecuteTime;

    /**
     * @description Dagrun ID
     *
     * @example dr_2242792_14542
     *
     * @var string
     */
    public $id;

    /**
     * @example 1717081729000
     *
     * @var int
     */
    public $startExecuteTime;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

    /**
     * @example f_8241792_20201202_2099680
     *
     * @var string
     */
    public $supplementId;
    protected $_name = [
        'bizDate' => 'BizDate',
        'duration' => 'Duration',
        'endExecuteTime' => 'EndExecuteTime',
        'id' => 'Id',
        'startExecuteTime' => 'StartExecuteTime',
        'status' => 'Status',
        'supplementId' => 'SupplementId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->endExecuteTime) {
            $res['EndExecuteTime'] = $this->endExecuteTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->startExecuteTime) {
            $res['StartExecuteTime'] = $this->startExecuteTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplementId) {
            $res['SupplementId'] = $this->supplementId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagrunList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EndExecuteTime'])) {
            $model->endExecuteTime = $map['EndExecuteTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StartExecuteTime'])) {
            $model->startExecuteTime = $map['StartExecuteTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplementId'])) {
            $model->supplementId = $map['SupplementId'];
        }

        return $model;
    }
}
