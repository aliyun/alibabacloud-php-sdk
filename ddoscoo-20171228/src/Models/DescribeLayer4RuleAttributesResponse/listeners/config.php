<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\cc;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\payloadLen;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\sla;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RuleAttributesResponse\listeners\config\slimit;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var string
     */
    public $synproxy;

    /**
     * @var string
     */
    public $nodataConn;

    /**
     * @var sla
     */
    public $sla;

    /**
     * @var slimit
     */
    public $slimit;

    /**
     * @var payloadLen
     */
    public $payloadLen;

    /**
     * @var cc
     */
    public $cc;
    protected $_name = [
        'persistenceTimeout' => 'PersistenceTimeout',
        'synproxy'           => 'Synproxy',
        'nodataConn'         => 'NodataConn',
        'sla'                => 'Sla',
        'slimit'             => 'Slimit',
        'payloadLen'         => 'PayloadLen',
        'cc'                 => 'Cc',
    ];

    public function validate()
    {
        Model::validateRequired('persistenceTimeout', $this->persistenceTimeout, true);
        Model::validateRequired('synproxy', $this->synproxy, true);
        Model::validateRequired('nodataConn', $this->nodataConn, true);
        Model::validateRequired('sla', $this->sla, true);
        Model::validateRequired('slimit', $this->slimit, true);
        Model::validateRequired('payloadLen', $this->payloadLen, true);
        Model::validateRequired('cc', $this->cc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }
        if (null !== $this->synproxy) {
            $res['Synproxy'] = $this->synproxy;
        }
        if (null !== $this->nodataConn) {
            $res['NodataConn'] = $this->nodataConn;
        }
        if (null !== $this->sla) {
            $res['Sla'] = null !== $this->sla ? $this->sla->toMap() : null;
        }
        if (null !== $this->slimit) {
            $res['Slimit'] = null !== $this->slimit ? $this->slimit->toMap() : null;
        }
        if (null !== $this->payloadLen) {
            $res['PayloadLen'] = null !== $this->payloadLen ? $this->payloadLen->toMap() : null;
        }
        if (null !== $this->cc) {
            $res['Cc'] = null !== $this->cc ? $this->cc->toMap() : null;
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
        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }
        if (isset($map['Synproxy'])) {
            $model->synproxy = $map['Synproxy'];
        }
        if (isset($map['NodataConn'])) {
            $model->nodataConn = $map['NodataConn'];
        }
        if (isset($map['Sla'])) {
            $model->sla = sla::fromMap($map['Sla']);
        }
        if (isset($map['Slimit'])) {
            $model->slimit = slimit::fromMap($map['Slimit']);
        }
        if (isset($map['PayloadLen'])) {
            $model->payloadLen = payloadLen::fromMap($map['PayloadLen']);
        }
        if (isset($map['Cc'])) {
            $model->cc = cc::fromMap($map['Cc']);
        }

        return $model;
    }
}
