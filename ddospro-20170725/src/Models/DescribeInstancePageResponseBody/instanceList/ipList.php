<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeInstancePageResponseBody\instanceList;

use AlibabaCloud\Tea\Model;

class ipList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $bandWidth;

    /**
     * @var int
     */
    public $elasticBandWidth;
    protected $_name = [
        'status'           => 'Status',
        'line'             => 'Line',
        'ip'               => 'Ip',
        'instanceId'       => 'InstanceId',
        'bandWidth'        => 'BandWidth',
        'elasticBandWidth' => 'ElasticBandWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->bandWidth) {
            $res['BandWidth'] = $this->bandWidth;
        }
        if (null !== $this->elasticBandWidth) {
            $res['ElasticBandWidth'] = $this->elasticBandWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BandWidth'])) {
            $model->bandWidth = $map['BandWidth'];
        }
        if (isset($map['ElasticBandWidth'])) {
            $model->elasticBandWidth = $map['ElasticBandWidth'];
        }

        return $model;
    }
}
