<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunAgentResponseBody\data\response\choices;

use AlibabaCloud\Dara\Model;

class message extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $roleDisplayName;
    protected $_name = [
        'content' => 'content',
        'role' => 'role',
        'roleDisplayName' => 'roleDisplayName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->roleDisplayName) {
            $res['roleDisplayName'] = $this->roleDisplayName;
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
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['roleDisplayName'])) {
            $model->roleDisplayName = $map['roleDisplayName'];
        }

        return $model;
    }
}
