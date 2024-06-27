<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSelectItemResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string[]
     */
    public $monitorStatusList;

    /**
     * @var string[]
     */
    public $taskIdList;
    protected $_name = [
        'monitorStatusList' => 'monitorStatusList',
        'taskIdList'        => 'taskIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->monitorStatusList) {
            $res['monitorStatusList'] = $this->monitorStatusList;
        }
        if (null !== $this->taskIdList) {
            $res['taskIdList'] = $this->taskIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['monitorStatusList'])) {
            if (!empty($map['monitorStatusList'])) {
                $model->monitorStatusList = $map['monitorStatusList'];
            }
        }
        if (isset($map['taskIdList'])) {
            if (!empty($map['taskIdList'])) {
                $model->taskIdList = $map['taskIdList'];
            }
        }

        return $model;
    }
}
