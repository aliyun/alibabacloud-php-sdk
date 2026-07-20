<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class QueryAccountSafetyIncidentRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $punishEndTime;

    /**
     * @var string
     */
    public $punishStartTime;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliyunLang' => 'AliyunLang',
        'caseCode' => 'CaseCode',
        'current' => 'Current',
        'eventId' => 'EventId',
        'pageSize' => 'PageSize',
        'punishEndTime' => 'PunishEndTime',
        'punishStartTime' => 'PunishStartTime',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->punishEndTime) {
            $res['PunishEndTime'] = $this->punishEndTime;
        }

        if (null !== $this->punishStartTime) {
            $res['PunishStartTime'] = $this->punishStartTime;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PunishEndTime'])) {
            $model->punishEndTime = $map['PunishEndTime'];
        }

        if (isset($map['PunishStartTime'])) {
            $model->punishStartTime = $map['PunishStartTime'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
