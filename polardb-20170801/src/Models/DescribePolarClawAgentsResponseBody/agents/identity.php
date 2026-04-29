<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentsResponseBody\agents;

use AlibabaCloud\Dara\Model;

class identity extends Model
{
    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $emoji;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $theme;
    protected $_name = [
        'avatar' => 'Avatar',
        'avatarUrl' => 'AvatarUrl',
        'emoji' => 'Emoji',
        'name' => 'Name',
        'theme' => 'Theme',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }

        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->emoji) {
            $res['Emoji'] = $this->emoji;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->theme) {
            $res['Theme'] = $this->theme;
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
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }

        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['Emoji'])) {
            $model->emoji = $map['Emoji'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Theme'])) {
            $model->theme = $map['Theme'];
        }

        return $model;
    }
}
