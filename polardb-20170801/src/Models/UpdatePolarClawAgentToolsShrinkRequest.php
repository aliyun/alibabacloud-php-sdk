<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdatePolarClawAgentToolsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $allowShrink;

    /**
     * @var string
     */
    public $alsoAllowShrink;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $denyShrink;

    /**
     * @var string
     */
    public $profile;
    protected $_name = [
        'agentId' => 'AgentId',
        'allowShrink' => 'Allow',
        'alsoAllowShrink' => 'AlsoAllow',
        'applicationId' => 'ApplicationId',
        'denyShrink' => 'Deny',
        'profile' => 'Profile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->allowShrink) {
            $res['Allow'] = $this->allowShrink;
        }

        if (null !== $this->alsoAllowShrink) {
            $res['AlsoAllow'] = $this->alsoAllowShrink;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->denyShrink) {
            $res['Deny'] = $this->denyShrink;
        }

        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['Allow'])) {
            $model->allowShrink = $map['Allow'];
        }

        if (isset($map['AlsoAllow'])) {
            $model->alsoAllowShrink = $map['AlsoAllow'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Deny'])) {
            $model->denyShrink = $map['Deny'];
        }

        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }

        return $model;
    }
}
