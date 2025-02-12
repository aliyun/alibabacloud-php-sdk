<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeElasticQpsRecordResponseBody;

use AlibabaCloud\Dara\Model;

class elasticQpsList extends Model
{
    /**
     * @var int
     */
    public $date;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var int
     */
    public $opsElasticQps;
    /**
     * @var int
     */
    public $opsQps;
    /**
     * @var int
     */
    public $originQps;
    /**
     * @var int
     */
    public $qps;
    /**
     * @var int
     */
    public $qpsPeak;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
