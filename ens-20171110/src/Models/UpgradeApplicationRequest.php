<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class UpgradeApplicationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example a2bac6f4-75dc-455e-8389-2dc8e47526d3
     *
     * @var string
     */
    public $appId;

    /**
     * @description The information template for phased update. The value must be a JSON string and contain the following information:
     *
     *   Version range that you want to update
     *   Configuration information of the target version
     *   Canary release policy for resources
     *   Intelligent upgrade policy that contains information such as the time window and resource usage limit
     *
     * @example {\"fromAppVersions\":{        \"operator\":\"In\",        \"values\":[            \"v1\",            \"v2\"        ]    },    \"toAppVersion\":\"v3\",    \"descrip\":\"xxx\",    \"workload\":[        {            \"name\":\"nginx\",            \"podSpec\":{            }        }    ],    \"upgradeStrategy\":{        \"name\":\"ScheduleToISP\",        \"parameters\":{            \"operator\":\"In\",            \"values\":[                \"telecom\"            ]        }    },    \"autoUpgradeStrategy\":{        \"name\":\"AdjustToPodUsage\",        \"checkInterval\":600,        \"startTime\":\"2021-02-19 00:00:00\",        \"startHourPoint\":\"0\",        \"endHourPoint\":\"8\",        \"endTime\":\"2021-02-19 08:00:00\",        \"level\":\"RegionId\",        \"rules\":[            {                \"regionCodes\":[                    \"cn-wuxi-telecom_unicom_cmcc\",                    \"cn-shijiazhuang-telecom_unicom_cmcc\"                ],                \"usageRatioLimit\":{                    \"maxPodUsageRatio\":50                },                \"maxUpgradingRatio\":50            },            {                \"regionCodes\":[                    \"cn-wuhan-telecom_unicom_cmcc\"                ],                \"usageRatioLimit\":{                    \"maxPodUsageRatio\":30                },                \"maxUpgradingRatio\":20            },            {                \"regionCodes\":[                    \"All\"                ],                \"usageRatioLimit\":{                    \"maxPodUsageRatio\":20                },                \"maxUpgradingRatio\":50,                \"maxUpgradingCount\":2            }        ]    }}
     *
     * @var string
     */
    public $template;

    /**
     * @description The timeout period for asynchronous upgrade. Unit: seconds. Default value: 300.
     *
     * @example 1800
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'    => 'AppId',
        'template' => 'Template',
        'timeout'  => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeApplicationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
