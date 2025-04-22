<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class CustomSideLinkConfig extends Model
{
    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'icon' => 'icon',
        'link' => 'link',
        'text' => 'text',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->link) {
            $res['link'] = $this->link;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['link'])) {
            $model->link = $map['link'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
