<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class DeleteTableThemeRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $themeId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'themeId' => 'ThemeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
