<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CreateUsageDetailDataExportTaskRequest extends Model
{
    /**
     * @description The accelerated domain names based on which the resource usage details are generated. If you do not specify a domain name group, resource usage details are exported based on this parameter.
     *
     * If you do not set this parameter, resource usage details are exported based on user accounts.
     * @example example.com
     *
     * @var string
     */
    public $domainNames;

    /**
     * @description The end of the time range to query.
     *
     * >  The end time must be later than the start time.
     * @example 2019-12-10T21:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The group of accelerated domain names based on which the resource usage details are generated. If you set this parameter, ignore the **DomainNames** parameter.
     *
     * @example xxx
     *
     * @var string
     */
    public $group;

    /**
     * @description The language of the exported file. Valid values:
     *
     *   **zh-cn**: Chinese. This is the default value.
     *   **en-us**: English
     *
     * @example en-us
     *
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The beginning of the time range to query.
     *
     * Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC+0.
     * @example 2019-12-10T20:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The name of the task.
     *
     * @example refresh
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of content based on which the data is generated. Valid values:
     *
     *   **flow**: network traffic and bandwidth
     *   **vas**: requests
     *
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
        'ownerId'     => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
