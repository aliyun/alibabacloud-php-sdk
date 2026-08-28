<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateWorkspaceRequest\body\networkConfiguration\vpc;

class networkConfiguration extends Model
{
    /**
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'vpc' => 'vpc',
    ];

    public function validate()
    {
        if (null !== $this->vpc) {
            $this->vpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpc) {
            $res['vpc'] = null !== $this->vpc ? $this->vpc->toArray($noStream) : $this->vpc;
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
        if (isset($map['vpc'])) {
            $model->vpc = vpc::fromMap($map['vpc']);
        }

        return $model;
    }
}
