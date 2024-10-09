<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models\GetBdrcServiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1726169608
     *
     * @var int
     */
    public $openTime;

    /**
     * @example 1726169608
     *
     * @var int
     */
    public $protectionScoreUpdatedTime;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $serviceInitializeStatus;

    /**
     * @example OPENED
     *
     * @var string
     */
    public $serviceStatus;
    protected $_name = [
        'openTime'                   => 'OpenTime',
        'protectionScoreUpdatedTime' => 'ProtectionScoreUpdatedTime',
        'serviceInitializeStatus'    => 'ServiceInitializeStatus',
        'serviceStatus'              => 'ServiceStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->protectionScoreUpdatedTime) {
            $res['ProtectionScoreUpdatedTime'] = $this->protectionScoreUpdatedTime;
        }
        if (null !== $this->serviceInitializeStatus) {
            $res['ServiceInitializeStatus'] = $this->serviceInitializeStatus;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ProtectionScoreUpdatedTime'])) {
            $model->protectionScoreUpdatedTime = $map['ProtectionScoreUpdatedTime'];
        }
        if (isset($map['ServiceInitializeStatus'])) {
            $model->serviceInitializeStatus = $map['ServiceInitializeStatus'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        return $model;
    }
}
