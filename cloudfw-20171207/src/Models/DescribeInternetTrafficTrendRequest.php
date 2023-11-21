<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeInternetTrafficTrendRequest extends Model
{
    /**
     * @description The direction of the internet traffic.
     *
     * Valid values:
     *
     *   **in**: inbound traffic
     *   **out**: outbound traffic
     *
     * @example in
     *
     * @var string
     */
    public $direction;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1674958929
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content in the request and response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The source code.
     *
     * @example yundun
     *
     * @var string
     */
    public $sourceCode;

    /**
     * @description The IP address of the access source.
     *
     * @example 101.80.171.196
     *
     * @deprecated
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The private IP address of the source.
     *
     * @example 10.100.134.60
     *
     * @var string
     */
    public $srcPrivateIP;

    /**
     * @description The public IP address of the source.
     *
     * @example 47.112.210.136
     *
     * @var string
     */
    public $srcPublicIP;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1670307484
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The type of the traffic that is captured. Valid values:
     *
     *   **max** (default): peak traffic
     *   **avg**: average traffic
     *
     * @example max
     *
     * @var string
     */
    public $trafficType;
    protected $_name = [
        'direction'    => 'Direction',
        'endTime'      => 'EndTime',
        'lang'         => 'Lang',
        'sourceCode'   => 'SourceCode',
        'sourceIp'     => 'SourceIp',
        'srcPrivateIP' => 'SrcPrivateIP',
        'srcPublicIP'  => 'SrcPublicIP',
        'startTime'    => 'StartTime',
        'trafficType'  => 'TrafficType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->srcPrivateIP) {
            $res['SrcPrivateIP'] = $this->srcPrivateIP;
        }
        if (null !== $this->srcPublicIP) {
            $res['SrcPublicIP'] = $this->srcPublicIP;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->trafficType) {
            $res['TrafficType'] = $this->trafficType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInternetTrafficTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['SrcPrivateIP'])) {
            $model->srcPrivateIP = $map['SrcPrivateIP'];
        }
        if (isset($map['SrcPublicIP'])) {
            $model->srcPublicIP = $map['SrcPublicIP'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TrafficType'])) {
            $model->trafficType = $map['TrafficType'];
        }

        return $model;
    }
}
