<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListOncallSchedulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $oncallScheduleIdsShrink;

    /**
     * @var string
     */
    public $oncallScheduleName;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'oncallScheduleIdsShrink' => 'oncallScheduleIds',
        'oncallScheduleName' => 'oncallScheduleName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oncallScheduleIdsShrink) {
            $res['oncallScheduleIds'] = $this->oncallScheduleIdsShrink;
        }

        if (null !== $this->oncallScheduleName) {
            $res['oncallScheduleName'] = $this->oncallScheduleName;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['oncallScheduleIds'])) {
            $model->oncallScheduleIdsShrink = $map['oncallScheduleIds'];
        }

        if (isset($map['oncallScheduleName'])) {
            $model->oncallScheduleName = $map['oncallScheduleName'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
