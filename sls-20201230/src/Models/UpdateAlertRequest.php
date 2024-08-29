<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UpdateAlertRequest extends Model
{
    /**
     * @description The detailed configurations of the alert rule.
     *
     * This parameter is required.
     * @var AlertConfiguration
     */
    public $configuration;

    /**
     * @description The description of the alert rule.
     *
     * @example this is description
     *
     * @var string
     */
    public $description;

    /**
     * @description The display name of the alert rule.
     *
     * This parameter is required.
     * @example this is alert
     *
     * @var string
     */
    public $displayName;

    /**
     * @description The scheduling settings of the alert rule.
     *
     * This parameter is required.
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
     * @return UpdateAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['configuration'])) {
            $model->configuration = AlertConfiguration::fromMap($map['configuration']);
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
