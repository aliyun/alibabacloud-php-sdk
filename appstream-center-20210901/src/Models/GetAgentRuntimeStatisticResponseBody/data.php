<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAgentRuntimeStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $agentDisplayName;

    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var int
     */
    public $expiredCount;

    /**
     * @var int
     */
    public $noChannelConfiguredRuntimeCount;

    /**
     * @var int
     */
    public $noModelConfiguredRuntimeCount;

    /**
     * @var int
     */
    public $riskyRuntimeCount;

    /**
     * @var int
     */
    public $totalRuntimeCount;
    protected $_name = [
        'agentDisplayName' => 'AgentDisplayName',
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'expiredCount' => 'ExpiredCount',
        'noChannelConfiguredRuntimeCount' => 'NoChannelConfiguredRuntimeCount',
        'noModelConfiguredRuntimeCount' => 'NoModelConfiguredRuntimeCount',
        'riskyRuntimeCount' => 'RiskyRuntimeCount',
        'totalRuntimeCount' => 'TotalRuntimeCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentDisplayName) {
            $res['AgentDisplayName'] = $this->agentDisplayName;
        }

        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->expiredCount) {
            $res['ExpiredCount'] = $this->expiredCount;
        }

        if (null !== $this->noChannelConfiguredRuntimeCount) {
            $res['NoChannelConfiguredRuntimeCount'] = $this->noChannelConfiguredRuntimeCount;
        }

        if (null !== $this->noModelConfiguredRuntimeCount) {
            $res['NoModelConfiguredRuntimeCount'] = $this->noModelConfiguredRuntimeCount;
        }

        if (null !== $this->riskyRuntimeCount) {
            $res['RiskyRuntimeCount'] = $this->riskyRuntimeCount;
        }

        if (null !== $this->totalRuntimeCount) {
            $res['TotalRuntimeCount'] = $this->totalRuntimeCount;
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
        if (isset($map['AgentDisplayName'])) {
            $model->agentDisplayName = $map['AgentDisplayName'];
        }

        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['ExpiredCount'])) {
            $model->expiredCount = $map['ExpiredCount'];
        }

        if (isset($map['NoChannelConfiguredRuntimeCount'])) {
            $model->noChannelConfiguredRuntimeCount = $map['NoChannelConfiguredRuntimeCount'];
        }

        if (isset($map['NoModelConfiguredRuntimeCount'])) {
            $model->noModelConfiguredRuntimeCount = $map['NoModelConfiguredRuntimeCount'];
        }

        if (isset($map['RiskyRuntimeCount'])) {
            $model->riskyRuntimeCount = $map['RiskyRuntimeCount'];
        }

        if (isset($map['TotalRuntimeCount'])) {
            $model->totalRuntimeCount = $map['TotalRuntimeCount'];
        }

        return $model;
    }
}
