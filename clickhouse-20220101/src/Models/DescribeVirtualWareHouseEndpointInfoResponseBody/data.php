<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20220101\Models\DescribeVirtualWareHouseEndpointInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example slb
     *
     * @var string
     */
    public $endpointType;

    /**
     * @example 10.0.xx.xx
     *
     * @var string
     */
    public $ip;

    /**
     * @example intranet
     *
     * @var string
     */
    public $netType;

    /**
     * @example tcp:9000,http:8123,mysql:9004
     *
     * @var string
     */
    public $ports;

    /**
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @example vw-bp11gxp8g992f****.clickhouse.ads.aliyuncs.com
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'endpointType' => 'EndpointType',
        'ip'           => 'Ip',
        'netType'      => 'NetType',
        'ports'        => 'Ports',
        'status'       => 'Status',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['EndpointType'] = $this->endpointType;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->netType) {
            $res['NetType'] = $this->netType;
        }
        if (null !== $this->ports) {
            $res['Ports'] = $this->ports;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['EndpointType'])) {
            $model->endpointType = $map['EndpointType'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['NetType'])) {
            $model->netType = $map['NetType'];
        }
        if (isset($map['Ports'])) {
            $model->ports = $map['Ports'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
