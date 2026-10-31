<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList;

use AlibabaCloud\Dara\Model;

class monitoredTask extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schedulePeriodType;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'projectName' => 'ProjectName',
        'schedulePeriodType' => 'SchedulePeriodType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->schedulePeriodType) {
            $res['SchedulePeriodType'] = $this->schedulePeriodType;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SchedulePeriodType'])) {
            $model->schedulePeriodType = $map['SchedulePeriodType'];
        }

        return $model;
    }
}
