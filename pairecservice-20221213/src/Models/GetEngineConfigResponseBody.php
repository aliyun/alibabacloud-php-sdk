<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetEngineConfigResponseBody extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $configValue;

    /**
     * @example Pre
     *
     * @var string
     */
    public $environment;

    /**
     * @example 2024-01-03T02:28:00.000Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2024-08-27T12:00:00Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example 2024-01-03 02:28:00
     *
     * @var string
     */
    public $gmtReleasedTime;

    /**
     * @example engine_config_v1
     *
     * @var string
     */
    public $name;

    /**
     * @example 59CE7EC6-F268-5D71-9215-32922CC50D72
     *
     * @var string
     */
    public $requestId;

    /**
     * @example Released
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'configValue'     => 'ConfigValue',
        'environment'     => 'Environment',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'gmtReleasedTime' => 'GmtReleasedTime',
        'name'            => 'Name',
        'requestId'       => 'RequestId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->gmtReleasedTime) {
            $res['GmtReleasedTime'] = $this->gmtReleasedTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEngineConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['GmtReleasedTime'])) {
            $model->gmtReleasedTime = $map['GmtReleasedTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
