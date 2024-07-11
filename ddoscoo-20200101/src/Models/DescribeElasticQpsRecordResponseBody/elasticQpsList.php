<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponseBody;

use AlibabaCloud\Tea\Model;

class elasticQpsList extends Model
{
    /**
     * @description The timestamp. Unit: milliseconds.
     *
     * @example 1688140799999
     *
     * @var int
     */
    public $date;

    /**
     * @description The ID of the Anti-DDoS Proxy instance.
     *
     * @example ddoscoo-cn-7e225i41****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the Anti-DDoS Proxy instance.
     *
     * @example 203.***.***.199
     *
     * @var string
     */
    public $ip;

    /**
     * @description The burstable QPS value. A value of 0 indicates that the burstable QPS feature is not enabled.
     *
     * @example 300000
     *
     * @var int
     */
    public $opsElasticQps;

    /**
     * @description The service QPS (active).
     *
     * @example 1345
     *
     * @var int
     */
    public $opsQps;

    /**
     * @description The service QPS (purchased).
     *
     * @example 1345
     *
     * @var int
     */
    public $originQps;

    /**
     * @description The daily peak 95th percentile QPS.
     *
     * @example 4367
     *
     * @var int
     */
    public $qps;

    /**
     * @description The daily peak traffic.
     *
     * @example 122
     *
     * @var int
     */
    public $qpsPeak;

    /**
     * @description Indicates whether the instance has expired or is released. Valid values:
     *
     *   **1**: The instance runs as expected.
     *   **2**: The instance has expired.
     *   **4**: The instance is released.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'date'          => 'Date',
        'instanceId'    => 'InstanceId',
        'ip'            => 'Ip',
        'opsElasticQps' => 'OpsElasticQps',
        'opsQps'        => 'OpsQps',
        'originQps'     => 'OriginQps',
        'qps'           => 'Qps',
        'qpsPeak'       => 'QpsPeak',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->opsElasticQps) {
            $res['OpsElasticQps'] = $this->opsElasticQps;
        }
        if (null !== $this->opsQps) {
            $res['OpsQps'] = $this->opsQps;
        }
        if (null !== $this->originQps) {
            $res['OriginQps'] = $this->originQps;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->qpsPeak) {
            $res['QpsPeak'] = $this->qpsPeak;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elasticQpsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['OpsElasticQps'])) {
            $model->opsElasticQps = $map['OpsElasticQps'];
        }
        if (isset($map['OpsQps'])) {
            $model->opsQps = $map['OpsQps'];
        }
        if (isset($map['OriginQps'])) {
            $model->originQps = $map['OriginQps'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['QpsPeak'])) {
            $model->qpsPeak = $map['QpsPeak'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
