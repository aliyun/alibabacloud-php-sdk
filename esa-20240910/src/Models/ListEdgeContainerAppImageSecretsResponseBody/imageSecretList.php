<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppImageSecretsResponseBody;

use AlibabaCloud\Dara\Model;

class imageSecretList extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $registry;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'name' => 'Name',
        'registry' => 'Registry',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->registry) {
            $res['Registry'] = $this->registry;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Registry'])) {
            $model->registry = $map['Registry'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
