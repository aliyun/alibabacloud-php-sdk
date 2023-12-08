<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\GetApplicationResponseBody\application;

use AlibabaCloud\Tea\Model;

class alarmConfig extends Model
{
    /**
     * @description The alert contact list.
     *
     * @var string[]
     */
    public $contactGroups;

    /**
     * @description The health check URL of the application.
     *
     * @example /api/health/
     *
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @description The ID of the alert template.
     *
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'contactGroups'  => 'ContactGroups',
        'healthCheckUrl' => 'HealthCheckUrl',
        'templateIds'    => 'TemplateIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alarmConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = $map['ContactGroups'];
            }
        }
        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }
        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = $map['TemplateIds'];
            }
        }

        return $model;
    }
}
