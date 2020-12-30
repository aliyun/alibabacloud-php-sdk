<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models;

use AlibabaCloud\Tea\Model;

class ListOrganizationsRequest extends Model
{
    /**
     * @var string
     */
    public $accessToken;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var int
     */
    public $minAccessLevel;
    protected $_name = [
        'accessToken'    => 'AccessToken',
        'accessLevel'    => 'AccessLevel',
        'minAccessLevel' => 'MinAccessLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->minAccessLevel) {
            $res['MinAccessLevel'] = $this->minAccessLevel;
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
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['MinAccessLevel'])) {
            $model->minAccessLevel = $map['MinAccessLevel'];
        }

        return $model;
    }
}
