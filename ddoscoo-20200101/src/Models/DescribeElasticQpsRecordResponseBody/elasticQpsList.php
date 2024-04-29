<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponseBody;

use AlibabaCloud\Tea\Model;

class elasticQpsList extends Model
{
    /**
     * @example 1688140799999
     *
     * @var int
     */
    public $date;

    /**
     * @example ddoscoo-cn-7e225i41****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 203.***.***.199
     *
     * @var string
     */
    public $ip;

    /**
     * @example 300000
     *
     * @var int
     */
    public $opsElasticQps;

    /**
     * @example 1345
     *
     * @var int
     */
    public $opsQps;

    /**
     * @example 1345
     *
     * @var int
     */
    public $originQps;

    /**
     * @example 4367
     *
     * @var int
     */
    public $qps;

    /**
     * @example 122
     *
     * @var int
     */
    public $qpsPeak;

    /**
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
