<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawChannelsResponseBody\channels;

use AlibabaCloud\Dara\Model;

class accounts extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var bool
     */
    public $configured;

    /**
     * @var bool
     */
    public $connected;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string[]
     */
    public $issues;

    /**
     * @var int
     */
    public $lastInboundAt;

    /**
     * @var int
     */
    public $lastOutboundAt;
    protected $_name = [
        'accountId' => 'AccountId',
        'configured' => 'Configured',
        'connected' => 'Connected',
        'enabled' => 'Enabled',
        'issues' => 'Issues',
        'lastInboundAt' => 'LastInboundAt',
        'lastOutboundAt' => 'LastOutboundAt',
    ];

    public function validate()
    {
        if (\is_array($this->issues)) {
            Model::validateArray($this->issues);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->configured) {
            $res['Configured'] = $this->configured;
        }

        if (null !== $this->connected) {
            $res['Connected'] = $this->connected;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->issues) {
            if (\is_array($this->issues)) {
                $res['Issues'] = [];
                $n1 = 0;
                foreach ($this->issues as $item1) {
                    $res['Issues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastInboundAt) {
            $res['LastInboundAt'] = $this->lastInboundAt;
        }

        if (null !== $this->lastOutboundAt) {
            $res['LastOutboundAt'] = $this->lastOutboundAt;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['Configured'])) {
            $model->configured = $map['Configured'];
        }

        if (isset($map['Connected'])) {
            $model->connected = $map['Connected'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Issues'])) {
            if (!empty($map['Issues'])) {
                $model->issues = [];
                $n1 = 0;
                foreach ($map['Issues'] as $item1) {
                    $model->issues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LastInboundAt'])) {
            $model->lastInboundAt = $map['LastInboundAt'];
        }

        if (isset($map['LastOutboundAt'])) {
            $model->lastOutboundAt = $map['LastOutboundAt'];
        }

        return $model;
    }
}
