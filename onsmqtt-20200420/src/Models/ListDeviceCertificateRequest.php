<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceCertificateRequest extends Model
{
    /**
     * @description The instance ID of the Cloud Message Queue MQTT version, indicating which instance\\"s device certificates need to be viewed.
     *
     * This parameter is required.
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @description Indicates which page of the results to return. The starting page is counted from 1.
     *
     * This parameter is required.
     * @example 2
     *
     * @var string
     */
    public $pageNo;

    /**
     * @description The maximum number of query records to display per page. Value range: 1 to 100.
     *
     * This parameter is required.
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'mqttInstanceId' => 'MqttInstanceId',
        'pageNo'         => 'PageNo',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mqttInstanceId) {
            $res['MqttInstanceId'] = $this->mqttInstanceId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MqttInstanceId'])) {
            $model->mqttInstanceId = $map['MqttInstanceId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
