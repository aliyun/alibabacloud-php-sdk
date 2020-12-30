<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config\payloadLength;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config\sla;
use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeHealthCheckConfigResponseBody\listeners\config\slimit;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $synProxy;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var string
     */
    public $noDataConn;

    /**
     * @var sla
     */
    public $sla;

    /**
     * @var payloadLength
     */
    public $payloadLength;

    /**
     * @var slimit
     */
    public $slimit;
    protected $_name = [
        'synProxy'           => 'SynProxy',
        'persistenceTimeout' => 'PersistenceTimeout',
        'noDataConn'         => 'NoDataConn',
        'sla'                => 'Sla',
        'payloadLength'      => 'PayloadLength',
        'slimit'             => 'Slimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->synProxy) {
            $res['SynProxy'] = $this->synProxy;
        }
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->noDataConn) {
            $res['NoDataConn'] = $this->noDataConn;
        }
        if (null !== $this->sla) {
            $res['Sla'] = null !== $this->sla ? $this->sla->toMap() : null;
        }
        if (null !== $this->payloadLength) {
            $res['PayloadLength'] = null !== $this->payloadLength ? $this->payloadLength->toMap() : null;
        }
        if (null !== $this->slimit) {
            $res['Slimit'] = null !== $this->slimit ? $this->slimit->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SynProxy'])) {
            $model->synProxy = $map['SynProxy'];
        }
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['NoDataConn'])) {
            $model->noDataConn = $map['NoDataConn'];
        }
        if (isset($map['Sla'])) {
            $model->sla = sla::fromMap($map['Sla']);
        }
        if (isset($map['PayloadLength'])) {
            $model->payloadLength = payloadLength::fromMap($map['PayloadLength']);
        }
        if (isset($map['Slimit'])) {
            $model->slimit = slimit::fromMap($map['Slimit']);
        }

        return $model;
    }
}
