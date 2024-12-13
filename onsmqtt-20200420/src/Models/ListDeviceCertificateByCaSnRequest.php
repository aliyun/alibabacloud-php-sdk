<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceCertificateByCaSnRequest extends Model
{
    /**
     * @description The SN serial number of the CA certificate to be queried, indicating which CA certificate\\"s registered device certificates are to be retrieved.
     *
     * This parameter is required.
     * @example 007269004887******
     *
     * @var string
     */
    public $caSn;

    /**
     * @description The instance ID bound to the CA certificate, which is the instance ID of the MQTT version of the cloud message queue.
     *
     * This parameter is required.
     * @example post-cn-7mz2d******
     *
     * @var string
     */
    public $mqttInstanceId;

    /**
     * @description Indicates the page number of the returned results. The starting page is counted from 1.
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
        'caSn'           => 'CaSn',
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
        if (null !== $this->caSn) {
            $res['CaSn'] = $this->caSn;
        }
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
     * @return ListDeviceCertificateByCaSnRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaSn'])) {
            $model->caSn = $map['CaSn'];
        }
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
