<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemResponseBody\data\deploymentConfig;

use AlibabaCloud\Dara\Model;

class parameterTransformConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $ruleSetId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'enabled' => 'enabled',
        'ruleSetId' => 'ruleSetId',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->ruleSetId) {
            $res['ruleSetId'] = $this->ruleSetId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['ruleSetId'])) {
            $model->ruleSetId = $map['ruleSetId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
