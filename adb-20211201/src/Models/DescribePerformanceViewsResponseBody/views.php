<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsResponseBody;

use AlibabaCloud\Dara\Model;

class views extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $viewName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'updateTime' => 'UpdateTime',
        'viewName' => 'ViewName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->viewName) {
            $res['ViewName'] = $this->viewName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['ViewName'])) {
            $model->viewName = $map['ViewName'];
        }

        return $model;
    }
}
