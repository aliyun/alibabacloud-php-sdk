<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DeleteTableThemeRequest extends Model
{
    /**
     * @description The ID of the DataWorks workspace.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The ID of the table folder.
     *
     * @example 123
     *
     * @var int
     */
    public $themeId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'themeId'   => 'ThemeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return DeleteTableThemeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ThemeId'])) {
            $model->themeId = $map['ThemeId'];
        }

        return $model;
    }
}
