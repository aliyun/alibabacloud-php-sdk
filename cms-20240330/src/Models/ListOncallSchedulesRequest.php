<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class ListOncallSchedulesRequest extends Model
{
    /**
     * @var string[]
     */
    public $oncallScheduleIds;

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
        'oncallScheduleIds' => 'oncallScheduleIds',
        'oncallScheduleName' => 'oncallScheduleName',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->oncallScheduleIds)) {
            Model::validateArray($this->oncallScheduleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->oncallScheduleIds) {
            if (\is_array($this->oncallScheduleIds)) {
                $res['oncallScheduleIds'] = [];
                $n1 = 0;
                foreach ($this->oncallScheduleIds as $item1) {
                    $res['oncallScheduleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['oncallScheduleIds'])) {
                $model->oncallScheduleIds = [];
                $n1 = 0;
                foreach ($map['oncallScheduleIds'] as $item1) {
                    $model->oncallScheduleIds[$n1] = $item1;
                    ++$n1;
                }
            }
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
