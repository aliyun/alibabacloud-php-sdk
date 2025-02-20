<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListOrganizationsRequest extends Model
{
    /**
     * @var int
     */
    public $accessLevel;
    /**
     * @var string
     */
    public $accessToken;
    /**
     * @var int
     */
    public $minAccessLevel;
    protected $_name = [
        'accessLevel'    => 'accessLevel',
        'accessToken'    => 'accessToken',
        'minAccessLevel' => 'minAccessLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessLevel) {
            $res['accessLevel'] = $this->accessLevel;
        }

        if (null !== $this->accessToken) {
            $res['accessToken'] = $this->accessToken;
        }

        if (null !== $this->minAccessLevel) {
            $res['minAccessLevel'] = $this->minAccessLevel;
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
        if (isset($map['accessLevel'])) {
            $model->accessLevel = $map['accessLevel'];
        }

        if (isset($map['accessToken'])) {
            $model->accessToken = $map['accessToken'];
        }

        if (isset($map['minAccessLevel'])) {
            $model->minAccessLevel = $map['minAccessLevel'];
        }

        return $model;
    }
}
