<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class QueryResourceControlEventsRequest extends Model
{
    /**
     * @var string
     */
    public $actionCode;

    /**
     * @var string[]
     */
    public $actionCodes;

    /**
     * @var string
     */
    public $aliyunLang;

    /**
     * @var string
     */
    public $businessCode;

    /**
     * @var string[]
     */
    public $caseCodesPrefix;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string[]
     */
    public $eventCodes;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string[]
     */
    public $eventIdList;

    /**
     * @var string[]
     */
    public $excludeActionCodes;

    /**
     * @var string[]
     */
    public $excludeEventCodes;

    /**
     * @var string[]
     */
    public $excludeReasons;

    /**
     * @var string[]
     */
    public $includeReasons;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
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
    public $reason;

    /**
     * @var string[]
     */
    public $sourceCodes;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'actionCode' => 'ActionCode',
        'actionCodes' => 'ActionCodes',
        'aliyunLang' => 'AliyunLang',
        'businessCode' => 'BusinessCode',
        'caseCodesPrefix' => 'CaseCodesPrefix',
        'current' => 'Current',
        'domain' => 'Domain',
        'eventCode' => 'EventCode',
        'eventCodes' => 'EventCodes',
        'eventId' => 'EventId',
        'eventIdList' => 'EventIdList',
        'excludeActionCodes' => 'ExcludeActionCodes',
        'excludeEventCodes' => 'ExcludeEventCodes',
        'excludeReasons' => 'ExcludeReasons',
        'includeReasons' => 'IncludeReasons',
        'instanceId' => 'InstanceId',
        'ip' => 'Ip',
        'pageSize' => 'PageSize',
        'punishEndTime' => 'PunishEndTime',
        'punishStartTime' => 'PunishStartTime',
        'reason' => 'Reason',
        'sourceCodes' => 'SourceCodes',
        'status' => 'Status',
        'statusList' => 'StatusList',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->actionCodes)) {
            Model::validateArray($this->actionCodes);
        }
        if (\is_array($this->caseCodesPrefix)) {
            Model::validateArray($this->caseCodesPrefix);
        }
        if (\is_array($this->eventCodes)) {
            Model::validateArray($this->eventCodes);
        }
        if (\is_array($this->eventIdList)) {
            Model::validateArray($this->eventIdList);
        }
        if (\is_array($this->excludeActionCodes)) {
            Model::validateArray($this->excludeActionCodes);
        }
        if (\is_array($this->excludeEventCodes)) {
            Model::validateArray($this->excludeEventCodes);
        }
        if (\is_array($this->excludeReasons)) {
            Model::validateArray($this->excludeReasons);
        }
        if (\is_array($this->includeReasons)) {
            Model::validateArray($this->includeReasons);
        }
        if (\is_array($this->sourceCodes)) {
            Model::validateArray($this->sourceCodes);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionCode) {
            $res['ActionCode'] = $this->actionCode;
        }

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

        if (null !== $this->businessCode) {
            $res['BusinessCode'] = $this->businessCode;
        }

        if (null !== $this->caseCodesPrefix) {
            if (\is_array($this->caseCodesPrefix)) {
                $res['CaseCodesPrefix'] = [];
                $n1 = 0;
                foreach ($this->caseCodesPrefix as $item1) {
                    $res['CaseCodesPrefix'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->eventCode) {
            $res['EventCode'] = $this->eventCode;
        }

        if (null !== $this->eventCodes) {
            if (\is_array($this->eventCodes)) {
                $res['EventCodes'] = [];
                $n1 = 0;
                foreach ($this->eventCodes as $item1) {
                    $res['EventCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->eventIdList) {
            if (\is_array($this->eventIdList)) {
                $res['EventIdList'] = [];
                $n1 = 0;
                foreach ($this->eventIdList as $item1) {
                    $res['EventIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeActionCodes) {
            if (\is_array($this->excludeActionCodes)) {
                $res['ExcludeActionCodes'] = [];
                $n1 = 0;
                foreach ($this->excludeActionCodes as $item1) {
                    $res['ExcludeActionCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeEventCodes) {
            if (\is_array($this->excludeEventCodes)) {
                $res['ExcludeEventCodes'] = [];
                $n1 = 0;
                foreach ($this->excludeEventCodes as $item1) {
                    $res['ExcludeEventCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludeReasons) {
            if (\is_array($this->excludeReasons)) {
                $res['ExcludeReasons'] = [];
                $n1 = 0;
                foreach ($this->excludeReasons as $item1) {
                    $res['ExcludeReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->includeReasons) {
            if (\is_array($this->includeReasons)) {
                $res['IncludeReasons'] = [];
                $n1 = 0;
                foreach ($this->includeReasons as $item1) {
                    $res['IncludeReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->sourceCodes) {
            if (\is_array($this->sourceCodes)) {
                $res['SourceCodes'] = [];
                $n1 = 0;
                foreach ($this->sourceCodes as $item1) {
                    $res['SourceCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['ActionCode'])) {
            $model->actionCode = $map['ActionCode'];
        }

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

        if (isset($map['BusinessCode'])) {
            $model->businessCode = $map['BusinessCode'];
        }

        if (isset($map['CaseCodesPrefix'])) {
            if (!empty($map['CaseCodesPrefix'])) {
                $model->caseCodesPrefix = [];
                $n1 = 0;
                foreach ($map['CaseCodesPrefix'] as $item1) {
                    $model->caseCodesPrefix[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EventCode'])) {
            $model->eventCode = $map['EventCode'];
        }

        if (isset($map['EventCodes'])) {
            if (!empty($map['EventCodes'])) {
                $model->eventCodes = [];
                $n1 = 0;
                foreach ($map['EventCodes'] as $item1) {
                    $model->eventCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['EventIdList'])) {
            if (!empty($map['EventIdList'])) {
                $model->eventIdList = [];
                $n1 = 0;
                foreach ($map['EventIdList'] as $item1) {
                    $model->eventIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeActionCodes'])) {
            if (!empty($map['ExcludeActionCodes'])) {
                $model->excludeActionCodes = [];
                $n1 = 0;
                foreach ($map['ExcludeActionCodes'] as $item1) {
                    $model->excludeActionCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeEventCodes'])) {
            if (!empty($map['ExcludeEventCodes'])) {
                $model->excludeEventCodes = [];
                $n1 = 0;
                foreach ($map['ExcludeEventCodes'] as $item1) {
                    $model->excludeEventCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludeReasons'])) {
            if (!empty($map['ExcludeReasons'])) {
                $model->excludeReasons = [];
                $n1 = 0;
                foreach ($map['ExcludeReasons'] as $item1) {
                    $model->excludeReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IncludeReasons'])) {
            if (!empty($map['IncludeReasons'])) {
                $model->includeReasons = [];
                $n1 = 0;
                foreach ($map['IncludeReasons'] as $item1) {
                    $model->includeReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
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

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['SourceCodes'])) {
            if (!empty($map['SourceCodes'])) {
                $model->sourceCodes = [];
                $n1 = 0;
                foreach ($map['SourceCodes'] as $item1) {
                    $model->sourceCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
