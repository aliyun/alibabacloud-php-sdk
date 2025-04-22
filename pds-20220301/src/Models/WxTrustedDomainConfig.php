<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class WxTrustedDomainConfig extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $show;
    protected $_name = [
        'content' => 'content',
        'name' => 'name',
        'show' => 'show',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->show) {
            $res['show'] = $this->show;
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['show'])) {
            $model->show = $map['show'];
        }

        return $model;
    }
}
