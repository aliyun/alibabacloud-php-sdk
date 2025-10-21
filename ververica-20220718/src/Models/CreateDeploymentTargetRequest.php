<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class CreateDeploymentTargetRequest extends Model
{
    /**
     * @var ResourceSpec
     */
    public $body;

    /**
     * @var string
     */
    public $deploymentTargetName;
    protected $_name = [
        'body' => 'body',
        'deploymentTargetName' => 'deploymentTargetName',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->deploymentTargetName) {
            $res['deploymentTargetName'] = $this->deploymentTargetName;
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
        if (isset($map['body'])) {
            $model->body = ResourceSpec::fromMap($map['body']);
        }

        if (isset($map['deploymentTargetName'])) {
            $model->deploymentTargetName = $map['deploymentTargetName'];
        }

        return $model;
    }
}
