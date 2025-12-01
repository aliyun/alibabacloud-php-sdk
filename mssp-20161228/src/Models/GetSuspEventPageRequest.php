<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Dara\Model;

class GetSuspEventPageRequest extends Model
{
    /**
     * @var int
     */
    public $alarmEndTime;

    /**
     * @var int
     */
    public $alarmStartTime;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'alarmEndTime' => 'AlarmEndTime',
        'alarmStartTime' => 'AlarmStartTime',
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'source' => 'Source',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alarmEndTime) {
            $res['AlarmEndTime'] = $this->alarmEndTime;
        }

        if (null !== $this->alarmStartTime) {
            $res['AlarmStartTime'] = $this->alarmStartTime;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmEndTime'])) {
            $model->alarmEndTime = $map['AlarmEndTime'];
        }

        if (isset($map['AlarmStartTime'])) {
            $model->alarmStartTime = $map['AlarmStartTime'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
