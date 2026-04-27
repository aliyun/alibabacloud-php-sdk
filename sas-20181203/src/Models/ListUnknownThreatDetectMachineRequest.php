<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListUnknownThreatDetectMachineRequest extends Model
{
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
    public $remark;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $studyMode;

    /**
     * @var int
     */
    public $studyTimeEnd;

    /**
     * @var int
     */
    public $studyTimeStart;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize' => 'PageSize',
        'remark' => 'Remark',
        'status' => 'Status',
        'studyMode' => 'StudyMode',
        'studyTimeEnd' => 'StudyTimeEnd',
        'studyTimeStart' => 'StudyTimeStart',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->studyMode) {
            $res['StudyMode'] = $this->studyMode;
        }

        if (null !== $this->studyTimeEnd) {
            $res['StudyTimeEnd'] = $this->studyTimeEnd;
        }

        if (null !== $this->studyTimeStart) {
            $res['StudyTimeStart'] = $this->studyTimeStart;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StudyMode'])) {
            $model->studyMode = $map['StudyMode'];
        }

        if (isset($map['StudyTimeEnd'])) {
            $model->studyTimeEnd = $map['StudyTimeEnd'];
        }

        if (isset($map['StudyTimeStart'])) {
            $model->studyTimeStart = $map['StudyTimeStart'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
