<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribePerformanceViewsResponseBody;

use AlibabaCloud\Tea\Model;

class views extends Model
{
    /**
     * @example 2024-06-18T07:06:53.000+00:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2024-06-18T07:07:32.000+00:00
     *
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
        'viewName'   => 'ViewName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return views
     */
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
