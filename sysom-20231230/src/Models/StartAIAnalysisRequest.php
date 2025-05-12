<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class StartAIAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $analysisTool;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $comms;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $pids;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'analysisTool' => 'analysisTool',
        'channel' => 'channel',
        'comms' => 'comms',
        'instance' => 'instance',
        'pids' => 'pids',
        'region' => 'region',
        'timeout' => 'timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisTool) {
            $res['analysisTool'] = $this->analysisTool;
        }

        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }

        if (null !== $this->comms) {
            $res['comms'] = $this->comms;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->pids) {
            $res['pids'] = $this->pids;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
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
        if (isset($map['analysisTool'])) {
            $model->analysisTool = $map['analysisTool'];
        }

        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }

        if (isset($map['comms'])) {
            $model->comms = $map['comms'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['pids'])) {
            $model->pids = $map['pids'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        return $model;
    }
}
