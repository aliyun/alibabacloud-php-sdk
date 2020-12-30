<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeAutomaticTraceabilitySlsLogResponseBody;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $time;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $point;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $sourceIpLocation;
    protected $_name = [
        'sourceIp'         => 'SourceIp',
        'time'             => 'Time',
        'token'            => 'Token',
        'point'            => 'Point',
        'ip'               => 'Ip',
        'sourceIpLocation' => 'SourceIpLocation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->point) {
            $res['Point'] = $this->point;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->sourceIpLocation) {
            $res['SourceIpLocation'] = $this->sourceIpLocation;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Point'])) {
            $model->point = $map['Point'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['SourceIpLocation'])) {
            $model->sourceIpLocation = $map['SourceIpLocation'];
        }

        return $model;
    }
}
