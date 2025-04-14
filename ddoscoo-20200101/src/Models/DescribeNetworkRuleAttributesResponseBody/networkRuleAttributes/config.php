<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\cc;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\payloadLen;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\sla;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes\config\slimit;

class config extends Model
{
    /**
     * @var cc
     */
    public $cc;

    /**
     * @var string
     */
    public $nodataConn;

    /**
     * @var payloadLen
     */
    public $payloadLen;

    /**
     * @var int
     */
    public $persistenceTimeout;

    /**
     * @var sla
     */
    public $sla;

    /**
     * @var slimit
     */
    public $slimit;

    /**
     * @var string
     */
    public $synproxy;
    protected $_name = [
        'cc' => 'Cc',
        'nodataConn' => 'NodataConn',
        'payloadLen' => 'PayloadLen',
        'persistenceTimeout' => 'PersistenceTimeout',
        'sla' => 'Sla',
        'slimit' => 'Slimit',
        'synproxy' => 'Synproxy',
    ];

    public function validate()
    {
        if (null !== $this->cc) {
            $this->cc->validate();
        }
        if (null !== $this->payloadLen) {
            $this->payloadLen->validate();
        }
        if (null !== $this->sla) {
            $this->sla->validate();
        }
        if (null !== $this->slimit) {
            $this->slimit->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = null !== $this->cc ? $this->cc->toArray($noStream) : $this->cc;
        }

        if (null !== $this->nodataConn) {
            $res['NodataConn'] = $this->nodataConn;
        }

        if (null !== $this->payloadLen) {
            $res['PayloadLen'] = null !== $this->payloadLen ? $this->payloadLen->toArray($noStream) : $this->payloadLen;
        }

        if (null !== $this->persistenceTimeout) {
            $res['PersistenceTimeout'] = $this->persistenceTimeout;
        }

        if (null !== $this->sla) {
            $res['Sla'] = null !== $this->sla ? $this->sla->toArray($noStream) : $this->sla;
        }

        if (null !== $this->slimit) {
            $res['Slimit'] = null !== $this->slimit ? $this->slimit->toArray($noStream) : $this->slimit;
        }

        if (null !== $this->synproxy) {
            $res['Synproxy'] = $this->synproxy;
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
        if (isset($map['Cc'])) {
            $model->cc = cc::fromMap($map['Cc']);
        }

        if (isset($map['NodataConn'])) {
            $model->nodataConn = $map['NodataConn'];
        }

        if (isset($map['PayloadLen'])) {
            $model->payloadLen = payloadLen::fromMap($map['PayloadLen']);
        }

        if (isset($map['PersistenceTimeout'])) {
            $model->persistenceTimeout = $map['PersistenceTimeout'];
        }

        if (isset($map['Sla'])) {
            $model->sla = sla::fromMap($map['Sla']);
        }

        if (isset($map['Slimit'])) {
            $model->slimit = slimit::fromMap($map['Slimit']);
        }

        if (isset($map['Synproxy'])) {
            $model->synproxy = $map['Synproxy'];
        }

        return $model;
    }
}
