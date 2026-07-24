<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class UpdateDeploymentByNameRequest extends Model
{
    /**
     * @var Deployment
     */
    public $body;

    /**
     * @var string
     */
    public $deploymentName;
    protected $_name = [
        'body' => 'body',
        'deploymentName' => 'deploymentName',
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

        if (null !== $this->deploymentName) {
            $res['deploymentName'] = $this->deploymentName;
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
            $model->body = Deployment::fromMap($map['body']);
        }

        if (isset($map['deploymentName'])) {
            $model->deploymentName = $map['deploymentName'];
        }

        return $model;
    }
}
