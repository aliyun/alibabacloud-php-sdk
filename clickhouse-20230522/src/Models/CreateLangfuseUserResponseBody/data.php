<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateLangfuseUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateLangfuseUserResponseBody\data\membership;

class data extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $email;

    /**
     * @var membership
     */
    public $membership;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'createdAt' => 'CreatedAt',
        'email' => 'Email',
        'membership' => 'Membership',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->membership) {
            $this->membership->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->membership) {
            $res['Membership'] = null !== $this->membership ? $this->membership->toArray($noStream) : $this->membership;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Membership'])) {
            $model->membership = membership::fromMap($map['Membership']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
