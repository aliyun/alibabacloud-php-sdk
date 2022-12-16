<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\UpdateTableRequest;

use AlibabaCloud\Tea\Model;

class themes extends Model
{
    /**
     * @example 101
     *
     * @var int
     */
    public $themeId;

    /**
     * @example 101
     *
     * @var int
     */
    public $themeLevel;
    protected $_name = [
        'themeId'    => 'ThemeId',
        'themeLevel' => 'ThemeLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return themes
     */
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
