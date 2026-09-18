<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\GenerateRelayPollerScriptResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $targetId;
    protected $_name = [
        'platform' => 'Platform',
        'script' => 'Script',
        'targetId' => 'TargetId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
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
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        return $model;
    }
}
