<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ModifyDataAgentThemeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $themeId;

    /**
     * @var string
     */
    public $themeName;
    protected $_name = [
        'description' => 'Description',
        'themeId' => 'ThemeId',
        'themeName' => 'ThemeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        if (null !== $this->themeName) {
            $res['ThemeName'] = $this->themeName;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        if (isset($map['ThemeName'])) {
            $model->themeName = $map['ThemeName'];
        }

        return $model;
    }
}
