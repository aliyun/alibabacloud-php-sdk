<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models;

use AlibabaCloud\Dara\Model;

class CreateSessionRequest extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var bool
     */
    public $uiEnabled;
    protected $_name = [
        'title' => 'title',
        'uiEnabled' => 'uiEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->uiEnabled) {
            $res['uiEnabled'] = $this->uiEnabled;
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['uiEnabled'])) {
            $model->uiEnabled = $map['uiEnabled'];
        }

        return $model;
    }
}
