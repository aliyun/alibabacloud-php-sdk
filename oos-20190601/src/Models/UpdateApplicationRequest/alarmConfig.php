<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\UpdateApplicationRequest;

use AlibabaCloud\Dara\Model;

class alarmConfig extends Model
{
    /**
     * @var string[]
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $healthCheckUrl;

    /**
     * @var string[]
     */
    public $templateIds;
    protected $_name = [
        'contactGroups' => 'ContactGroups',
        'healthCheckUrl' => 'HealthCheckUrl',
        'templateIds' => 'TemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroups)) {
            Model::validateArray($this->contactGroups);
        }
        if (\is_array($this->templateIds)) {
            Model::validateArray($this->templateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroups) {
            if (\is_array($this->contactGroups)) {
                $res['ContactGroups'] = [];
                $n1 = 0;
                foreach ($this->contactGroups as $item1) {
                    $res['ContactGroups'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->healthCheckUrl) {
            $res['HealthCheckUrl'] = $this->healthCheckUrl;
        }

        if (null !== $this->templateIds) {
            if (\is_array($this->templateIds)) {
                $res['TemplateIds'] = [];
                $n1 = 0;
                foreach ($this->templateIds as $item1) {
                    $res['TemplateIds'][$n1++] = $item1;
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
        if (isset($map['ContactGroups'])) {
            if (!empty($map['ContactGroups'])) {
                $model->contactGroups = [];
                $n1 = 0;
                foreach ($map['ContactGroups'] as $item1) {
                    $model->contactGroups[$n1++] = $item1;
                }
            }
        }

        if (isset($map['HealthCheckUrl'])) {
            $model->healthCheckUrl = $map['HealthCheckUrl'];
        }

        if (isset($map['TemplateIds'])) {
            if (!empty($map['TemplateIds'])) {
                $model->templateIds = [];
                $n1 = 0;
                foreach ($map['TemplateIds'] as $item1) {
                    $model->templateIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
