<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponseBody\data\dataInfo\eventTimes;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryBlockEventResponseBody\data\dataInfo\levelType;

class dataInfo extends Model
{
    /**
     * @var string
     */
    public $empId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var eventTimes[]
     */
    public $eventTimes;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $url;

    /**
     * @var levelType
     */
    public $levelType;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'empId' => 'EmpId',
        'endTime' => 'EndTime',
        'eventTimes' => 'EventTimes',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'reason' => 'Reason',
        'startTime' => 'StartTime',
        'title' => 'Title',
        'url' => 'Url',
        'levelType' => 'levelType',
        'versionId' => 'versionId',
    ];

    public function validate()
    {
        if (\is_array($this->eventTimes)) {
            Model::validateArray($this->eventTimes);
        }
        if (null !== $this->levelType) {
            $this->levelType->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->empId) {
            $res['EmpId'] = $this->empId;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->eventTimes) {
            if (\is_array($this->eventTimes)) {
                $res['EventTimes'] = [];
                $n1 = 0;
                foreach ($this->eventTimes as $item1) {
                    $res['EventTimes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->levelType) {
            $res['levelType'] = null !== $this->levelType ? $this->levelType->toArray($noStream) : $this->levelType;
        }

        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
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
        if (isset($map['EmpId'])) {
            $model->empId = $map['EmpId'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EventTimes'])) {
            if (!empty($map['EventTimes'])) {
                $model->eventTimes = [];
                $n1 = 0;
                foreach ($map['EventTimes'] as $item1) {
                    $model->eventTimes[$n1] = eventTimes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['levelType'])) {
            $model->levelType = levelType::fromMap($map['levelType']);
        }

        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
