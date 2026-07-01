<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class AddRcsSignMenuRequest extends Model
{
    /**
     * @var string
     */
    public $menuContent;

    /**
     * @var string
     */
    public $signName;
    protected $_name = [
        'menuContent' => 'MenuContent',
        'signName' => 'SignName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->menuContent) {
            $res['MenuContent'] = $this->menuContent;
        }

        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
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
        if (isset($map['MenuContent'])) {
            $model->menuContent = $map['MenuContent'];
        }

        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }

        return $model;
    }
}
