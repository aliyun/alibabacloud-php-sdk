<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallMcpMarketItemRequest\body\deploymentConfig;

use AlibabaCloud\Dara\Model;

class accessControl extends Model
{
    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'credentialId' => 'credentialId',
        'enabled' => 'enabled',
        'mode' => 'mode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
