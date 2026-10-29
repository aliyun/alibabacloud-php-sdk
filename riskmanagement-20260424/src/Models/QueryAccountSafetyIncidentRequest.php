<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class QueryAccountSafetyIncidentRequest extends Model
{
    /**
     * @var string[]
     */
    public $actionCodes;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string[]
     */
    public $businessCodes;

    /**
     * @var string
     */
    public $caseCode;

    /**
     * @var string[]
     */
    public $caseCodes;

    /**
     * @var string
     */
    public $current;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string[]
     */
    public $eventIds;

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

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'actionCodes' => 'ActionCodes',
        'aliyunLang' => 'AliyunLang',
        'businessCodes' => 'BusinessCodes',
        'caseCode' => 'CaseCode',
        'caseCodes' => 'CaseCodes',
        'current' => 'Current',
        'eventId' => 'EventId',
        'eventIds' => 'EventIds',
        'pageSize' => 'PageSize',
        'punishEndTime' => 'PunishEndTime',
        'punishStartTime' => 'PunishStartTime',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->actionCodes)) {
            Model::validateArray($this->actionCodes);
        }
        if (\is_array($this->businessCodes)) {
            Model::validateArray($this->businessCodes);
        }
        if (\is_array($this->caseCodes)) {
            Model::validateArray($this->caseCodes);
        }
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionCodes) {
            if (\is_array($this->actionCodes)) {
                $res['ActionCodes'] = [];
                $n1 = 0;
                foreach ($this->actionCodes as $item1) {
                    $res['ActionCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->aliyunLang) {
            $res['AliyunLang'] = $this->aliyunLang;
        }

        if (null !== $this->businessCodes) {
            if (\is_array($this->businessCodes)) {
                $res['BusinessCodes'] = [];
                $n1 = 0;
                foreach ($this->businessCodes as $item1) {
                    $res['BusinessCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->caseCode) {
            $res['CaseCode'] = $this->caseCode;
        }

        if (null !== $this->caseCodes) {
            if (\is_array($this->caseCodes)) {
                $res['CaseCodes'] = [];
                $n1 = 0;
                foreach ($this->caseCodes as $item1) {
                    $res['CaseCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['EventIds'] = [];
                $n1 = 0;
                foreach ($this->eventIds as $item1) {
                    $res['EventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ActionCodes'])) {
            if (!empty($map['ActionCodes'])) {
                $model->actionCodes = [];
                $n1 = 0;
                foreach ($map['ActionCodes'] as $item1) {
                    $model->actionCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AliyunLang'])) {
            $model->aliyunLang = $map['AliyunLang'];
        }

        if (isset($map['BusinessCodes'])) {
            if (!empty($map['BusinessCodes'])) {
                $model->businessCodes = [];
                $n1 = 0;
                foreach ($map['BusinessCodes'] as $item1) {
                    $model->businessCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CaseCode'])) {
            $model->caseCode = $map['CaseCode'];
        }

        if (isset($map['CaseCodes'])) {
            if (!empty($map['CaseCodes'])) {
                $model->caseCodes = [];
                $n1 = 0;
                foreach ($map['CaseCodes'] as $item1) {
                    $model->caseCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIds'])) {
            if (!empty($map['EventIds'])) {
                $model->eventIds = [];
                $n1 = 0;
                foreach ($map['EventIds'] as $item1) {
                    $model->eventIds[$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
