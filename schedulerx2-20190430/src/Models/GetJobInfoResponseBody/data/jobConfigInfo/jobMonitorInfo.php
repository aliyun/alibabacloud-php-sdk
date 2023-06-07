<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo;

use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo\contactInfo;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\GetJobInfoResponseBody\data\jobConfigInfo\jobMonitorInfo\monitorConfig;
use AlibabaCloud\Tea\Model;

class jobMonitorInfo extends Model
{
    /**
     * @description The alert contact Information.
     *
     * @var contactInfo[]
     */
    public $contactInfo;

    /**
     * @description The configurations of the alerting features and the alert thresholds.
     *
     * @var monitorConfig
     */
    public $monitorConfig;
    protected $_name = [
        'contactInfo'   => 'ContactInfo',
        'monitorConfig' => 'MonitorConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactInfo) {
            $res['ContactInfo'] = [];
            if (null !== $this->contactInfo && \is_array($this->contactInfo)) {
                $n = 0;
                foreach ($this->contactInfo as $item) {
                    $res['ContactInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->monitorConfig) {
            $res['MonitorConfig'] = null !== $this->monitorConfig ? $this->monitorConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return jobMonitorInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactInfo'])) {
            if (!empty($map['ContactInfo'])) {
                $model->contactInfo = [];
                $n                  = 0;
                foreach ($map['ContactInfo'] as $item) {
                    $model->contactInfo[$n++] = null !== $item ? contactInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MonitorConfig'])) {
            $model->monitorConfig = monitorConfig::fromMap($map['MonitorConfig']);
        }

        return $model;
    }
}
