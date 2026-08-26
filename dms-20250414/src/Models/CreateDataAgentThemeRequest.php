<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateDataAgentThemeRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileFrom;

    /**
     * @var string
     */
    public $themeId;

    /**
     * @var string
     */
    public $themeName;

    /**
     * @var string
     */
    public $themeType;
    protected $_name = [
        'category' => 'Category',
        'description' => 'Description',
        'fileFrom' => 'FileFrom',
        'themeId' => 'ThemeId',
        'themeName' => 'ThemeName',
        'themeType' => 'ThemeType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->fileFrom) {
            $res['FileFrom'] = $this->fileFrom;
        }

        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        if (null !== $this->themeName) {
            $res['ThemeName'] = $this->themeName;
        }

        if (null !== $this->themeType) {
            $res['ThemeType'] = $this->themeType;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FileFrom'])) {
            $model->fileFrom = $map['FileFrom'];
        }

        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        if (isset($map['ThemeName'])) {
            $model->themeName = $map['ThemeName'];
        }

        if (isset($map['ThemeType'])) {
            $model->themeType = $map['ThemeType'];
        }

        return $model;
    }
}
