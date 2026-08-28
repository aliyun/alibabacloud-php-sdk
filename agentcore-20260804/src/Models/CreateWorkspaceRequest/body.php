<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateWorkspaceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateWorkspaceRequest\body\networkConfiguration;

class body extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var networkConfiguration
     */
    public $networkConfiguration;
    protected $_name = [
        'name' => 'name',
        'networkConfiguration' => 'networkConfiguration',
    ];

    public function validate()
    {
        if (null !== $this->networkConfiguration) {
            $this->networkConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkConfiguration) {
            $res['networkConfiguration'] = null !== $this->networkConfiguration ? $this->networkConfiguration->toArray($noStream) : $this->networkConfiguration;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkConfiguration'])) {
            $model->networkConfiguration = networkConfiguration::fromMap($map['networkConfiguration']);
        }

        return $model;
    }
}
