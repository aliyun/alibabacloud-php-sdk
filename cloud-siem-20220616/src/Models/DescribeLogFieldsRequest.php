<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogFieldsRequest extends Model
{
    /**
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logSource;

    /**
     * @example cloud_siem_aegis_sas_alert
     *
     * @var string
     */
    public $logType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'logSource' => 'LogSource',
        'logType'   => 'LogType',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logSource) {
            $res['LogSource'] = $this->logSource;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogFieldsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogSource'])) {
            $model->logSource = $map['LogSource'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
