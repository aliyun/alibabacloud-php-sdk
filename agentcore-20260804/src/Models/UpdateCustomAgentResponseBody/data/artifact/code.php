<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateCustomAgentResponseBody\data\artifact;

use AlibabaCloud\Dara\Model;

class code extends Model
{
    /**
     * @var string
     */
    public $entrypoint;

    /**
     * @var string
     */
    public $languageRuntime;

    /**
     * @var string
     */
    public $sourceUri;
    protected $_name = [
        'entrypoint' => 'entrypoint',
        'languageRuntime' => 'languageRuntime',
        'sourceUri' => 'sourceUri',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entrypoint) {
            $res['entrypoint'] = $this->entrypoint;
        }

        if (null !== $this->languageRuntime) {
            $res['languageRuntime'] = $this->languageRuntime;
        }

        if (null !== $this->sourceUri) {
            $res['sourceUri'] = $this->sourceUri;
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
        if (isset($map['entrypoint'])) {
            $model->entrypoint = $map['entrypoint'];
        }

        if (isset($map['languageRuntime'])) {
            $model->languageRuntime = $map['languageRuntime'];
        }

        if (isset($map['sourceUri'])) {
            $model->sourceUri = $map['sourceUri'];
        }

        return $model;
    }
}
