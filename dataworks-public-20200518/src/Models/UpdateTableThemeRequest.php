<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableThemeRequest extends Model
{
    /**
     * @description The name of the theme.
     *
     * This parameter is required.
     * @example table folder name
     *
     * @var string
     */
    public $name;

    /**
     * @description The workspace ID.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the theme.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $themeId;
    protected $_name = [
        'name'      => 'Name',
        'projectId' => 'ProjectId',
        'themeId'   => 'ThemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->themeId) {
            $res['ThemeId'] = $this->themeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableThemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        return $model;
    }
}
