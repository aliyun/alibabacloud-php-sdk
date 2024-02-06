<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataDownloadURLRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 474bdef0-d149-4695-abfb-52912d9143f0
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the data file.
     *
     * @example mirror_file/pk-1642597182026-878199448832413.tar
     *
     * @var string
     */
    public $dataName;

    /**
     * @description The version number of the data file.
     *
     * @example 7895
     *
     * @var string
     */
    public $dataVersion;

    /**
     * @description This parameter is reserved.
     *
     * @example 600
     *
     * @var int
     */
    public $expireTimeout;

    /**
     * @description The condition that you want to use to filter file servers. You can specify multiple canary release policies. By default, all resources are queried.
     *
     * @example {\"name\": \"ScheduleToRegionId\",\"parameters\":{\"operator\": \"In\",\"values\": [\"cn-shijiazhuang-telecom_unicom_cmcc\"]}}
     *
     * @var string
     */
    public $serverFilterStrategy;
    protected $_name = [
        'appId'                => 'AppId',
        'dataName'             => 'DataName',
        'dataVersion'          => 'DataVersion',
        'expireTimeout'        => 'ExpireTimeout',
        'serverFilterStrategy' => 'ServerFilterStrategy',
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
        if (null !== $this->dataName) {
            $res['DataName'] = $this->dataName;
        }
        if (null !== $this->dataVersion) {
            $res['DataVersion'] = $this->dataVersion;
        }
        if (null !== $this->expireTimeout) {
            $res['ExpireTimeout'] = $this->expireTimeout;
        }
        if (null !== $this->serverFilterStrategy) {
            $res['ServerFilterStrategy'] = $this->serverFilterStrategy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataDownloadURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DataName'])) {
            $model->dataName = $map['DataName'];
        }
        if (isset($map['DataVersion'])) {
            $model->dataVersion = $map['DataVersion'];
        }
        if (isset($map['ExpireTimeout'])) {
            $model->expireTimeout = $map['ExpireTimeout'];
        }
        if (isset($map['ServerFilterStrategy'])) {
            $model->serverFilterStrategy = $map['ServerFilterStrategy'];
        }

        return $model;
    }
}
