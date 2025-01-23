<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\CreateTableRequest;

use AlibabaCloud\Dara\Model;

class themes extends Model
{
    /**
     * @var int
     */
    public $themeId;
    /**
     * @var int
     */
    public $themeLevel;
    protected $_name = [
        'themeId'    => 'ThemeId',
        'themeLevel' => 'ThemeLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        if (null !== $this->themeLevel) {
            $res['ThemeLevel'] = $this->themeLevel;
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
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        if (isset($map['ThemeLevel'])) {
            $model->themeLevel = $map['ThemeLevel'];
        }

        return $model;
    }
}
