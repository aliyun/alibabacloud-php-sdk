<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class GetDeploymentsByIpRequest extends Model
{
    /**
     * @var string
     */
    public $dstIp;

    /**
     * @var string
     */
    public $dstPort;

    /**
     * @var bool
     */
    public $ignoreJobSummary;

    /**
     * @var bool
     */
    public $ignoreResourceSetting;

    /**
     * @var string
     */
    public $srcIp;

    /**
     * @var string
     */
    public $srcPort;
    protected $_name = [
        'dstIp' => 'dstIp',
        'dstPort' => 'dstPort',
        'ignoreJobSummary' => 'ignoreJobSummary',
        'ignoreResourceSetting' => 'ignoreResourceSetting',
        'srcIp' => 'srcIp',
        'srcPort' => 'srcPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstIp) {
            $res['dstIp'] = $this->dstIp;
        }

        if (null !== $this->dstPort) {
            $res['dstPort'] = $this->dstPort;
        }

        if (null !== $this->ignoreJobSummary) {
            $res['ignoreJobSummary'] = $this->ignoreJobSummary;
        }

        if (null !== $this->ignoreResourceSetting) {
            $res['ignoreResourceSetting'] = $this->ignoreResourceSetting;
        }

        if (null !== $this->srcIp) {
            $res['srcIp'] = $this->srcIp;
        }

        if (null !== $this->srcPort) {
            $res['srcPort'] = $this->srcPort;
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
        if (isset($map['dstIp'])) {
            $model->dstIp = $map['dstIp'];
        }

        if (isset($map['dstPort'])) {
            $model->dstPort = $map['dstPort'];
        }

        if (isset($map['ignoreJobSummary'])) {
            $model->ignoreJobSummary = $map['ignoreJobSummary'];
        }

        if (isset($map['ignoreResourceSetting'])) {
            $model->ignoreResourceSetting = $map['ignoreResourceSetting'];
        }

        if (isset($map['srcIp'])) {
            $model->srcIp = $map['srcIp'];
        }

        if (isset($map['srcPort'])) {
            $model->srcPort = $map['srcPort'];
        }

        return $model;
    }
}
