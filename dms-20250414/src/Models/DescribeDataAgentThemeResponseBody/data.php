<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentThemeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $modifiedAt;

    /**
     * @var string
     */
    public $referTo;

    /**
     * @var string
     */
    public $themeFrom;

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
        'createdAt' => 'CreatedAt',
        'description' => 'Description',
        'modifiedAt' => 'ModifiedAt',
        'referTo' => 'ReferTo',
        'themeFrom' => 'ThemeFrom',
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

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->modifiedAt) {
            $res['ModifiedAt'] = $this->modifiedAt;
        }

        if (null !== $this->referTo) {
            $res['ReferTo'] = $this->referTo;
        }

        if (null !== $this->themeFrom) {
            $res['ThemeFrom'] = $this->themeFrom;
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

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ModifiedAt'])) {
            $model->modifiedAt = $map['ModifiedAt'];
        }

        if (isset($map['ReferTo'])) {
            $model->referTo = $map['ReferTo'];
        }

        if (isset($map['ThemeFrom'])) {
            $model->themeFrom = $map['ThemeFrom'];
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
