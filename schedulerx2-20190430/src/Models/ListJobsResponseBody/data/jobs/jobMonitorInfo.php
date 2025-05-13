<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\jobMonitorInfo\contactInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListJobsResponseBody\data\jobs\jobMonitorInfo\monitorConfig;

class jobMonitorInfo extends Model
{
    /**
     * @var contactInfo[]
     */
    public $contactInfo;

    /**
     * @var monitorConfig
     */
    public $monitorConfig;
    protected $_name = [
        'contactInfo' => 'ContactInfo',
        'monitorConfig' => 'MonitorConfig',
    ];

    public function validate()
    {
        if (\is_array($this->contactInfo)) {
            Model::validateArray($this->contactInfo);
        }
        if (null !== $this->monitorConfig) {
            $this->monitorConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactInfo) {
            if (\is_array($this->contactInfo)) {
                $res['ContactInfo'] = [];
                $n1 = 0;
                foreach ($this->contactInfo as $item1) {
                    $res['ContactInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->monitorConfig) {
            $res['MonitorConfig'] = null !== $this->monitorConfig ? $this->monitorConfig->toArray($noStream) : $this->monitorConfig;
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
        if (isset($map['ContactInfo'])) {
            if (!empty($map['ContactInfo'])) {
                $model->contactInfo = [];
                $n1 = 0;
                foreach ($map['ContactInfo'] as $item1) {
                    $model->contactInfo[$n1++] = contactInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['MonitorConfig'])) {
            $model->monitorConfig = monitorConfig::fromMap($map['MonitorConfig']);
        }

        return $model;
    }
}
