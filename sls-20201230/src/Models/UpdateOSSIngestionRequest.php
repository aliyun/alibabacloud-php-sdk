<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateOSSIngestionRequest extends Model
{
    /**
     * @description The configurations of the OSS data import job.
     *
     * This parameter is required.
     * @var OSSIngestionConfiguration
     */
    public $configuration;

    /**
     * @description The description of the OSS data import job.
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the OSS data import job.
     *
     * This parameter is required.
     * @var string
     */
    public $displayName;

    /**
     * @description The scheduling type. By default, you do not need to specify this parameter. If you want to import data at regular intervals, such as importing data every Monday at 08: 00., you can specify a cron expression.
     *
     * @var Schedule
     */
    public $schedule;
    protected $_name = [
        'configuration' => 'configuration',
        'description'   => 'description',
        'displayName'   => 'displayName',
        'schedule'      => 'schedule',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toMap() : null;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->schedule) {
            $res['schedule'] = null !== $this->schedule ? $this->schedule->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateOSSIngestionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = OSSIngestionConfiguration::fromMap($map['configuration']);
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['schedule'])) {
            $model->schedule = Schedule::fromMap($map['schedule']);
        }

        return $model;
    }
}
