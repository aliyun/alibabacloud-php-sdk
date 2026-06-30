<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class UpdatePolarClawSkillShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $envShrink;

    /**
     * @var string
     */
    public $skillKey;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'applicationId' => 'ApplicationId',
        'enabled' => 'Enabled',
        'envShrink' => 'Env',
        'skillKey' => 'SkillKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->envShrink) {
            $res['Env'] = $this->envShrink;
        }

        if (null !== $this->skillKey) {
            $res['SkillKey'] = $this->skillKey;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Env'])) {
            $model->envShrink = $map['Env'];
        }

        if (isset($map['SkillKey'])) {
            $model->skillKey = $map['SkillKey'];
        }

        return $model;
    }
}
