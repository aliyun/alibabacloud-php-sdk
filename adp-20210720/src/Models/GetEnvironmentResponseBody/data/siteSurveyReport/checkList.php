<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\siteSurveyReport;

use AlibabaCloud\SDK\Adp\V20210720\Models\GetEnvironmentResponseBody\data\siteSurveyReport\checkList\failedList;
use AlibabaCloud\Tea\Model;

class checkList extends Model
{
    /**
     * @var mixed[]
     */
    public $description;

    /**
     * @var failedList[]
     */
    public $failedList;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'description',
        'failedList'  => 'failedList',
        'level'       => 'level',
        'name'        => 'name',
        'status'      => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->failedList) {
            $res['failedList'] = [];
            if (null !== $this->failedList && \is_array($this->failedList)) {
                $n = 0;
                foreach ($this->failedList as $item) {
                    $res['failedList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['failedList'])) {
            if (!empty($map['failedList'])) {
                $model->failedList = [];
                $n                 = 0;
                foreach ($map['failedList'] as $item) {
                    $model->failedList[$n++] = null !== $item ? failedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
