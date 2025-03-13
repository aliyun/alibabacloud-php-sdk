<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationsRequest extends Model
{
    /**
     * @example 5
     *
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $accessToken;

    /**
     * @example 60
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return ListOrganizationsRequest
     */
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
