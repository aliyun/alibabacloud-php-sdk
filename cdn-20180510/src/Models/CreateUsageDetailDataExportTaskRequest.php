<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateUsageDetailDataExportTaskRequest extends Model
{
    /**
     * @example example.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @example 2019-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example xxx
     *
     * @var string
     */
    public $group;

    /**
     * @example en-us
     *
     * @var string
     */
    public $language;

    /**
     * @example 2019-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $taskName;

    /**
     * @example flow
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'domainNames' => 'DomainNames',
        'endTime'     => 'EndTime',
        'group'       => 'Group',
        'language'    => 'Language',
        'startTime'   => 'StartTime',
        'taskName'    => 'TaskName',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainNames) {
            $res['DomainNames'] = $this->domainNames;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUsageDetailDataExportTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainNames'])) {
            $model->domainNames = $map['DomainNames'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
