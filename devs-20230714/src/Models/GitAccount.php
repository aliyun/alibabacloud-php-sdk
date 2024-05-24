<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class GitAccount extends Model
{
    /**
     * @example https://gitee.com/assets/no_portrait.png
     *
     * @var string
     */
    public $avatar;

    /**
     * @example your_displayname
     *
     * @var string
     */
    public $displayName;

    /**
     * @example 1
     *
     * @var string
     */
    public $id;

    /**
     * @example your_username
     *
     * @var string
     */
    public $name;

    /**
     * @example https://gitlab.com
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'avatar'      => 'avatar',
        'displayName' => 'displayName',
        'id'          => 'id',
        'name'        => 'name',
        'uri'         => 'uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->uri) {
            $res['uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GitAccount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['avatar'])) {
            $model->avatar = $map['avatar'];
        }
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['uri'])) {
            $model->uri = $map['uri'];
        }

        return $model;
    }
}
