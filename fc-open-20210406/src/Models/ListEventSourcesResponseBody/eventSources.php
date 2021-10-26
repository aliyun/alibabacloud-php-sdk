<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListEventSourcesResponseBody;

use AlibabaCloud\Tea\Model;

class eventSources extends Model
{
    /**
     * @description 创建时间
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 事件源资源标识符
     *
     * @var string
     */
    public $sourceArn;
    protected $_name = [
        'createdTime' => 'createdTime',
        'sourceArn'   => 'sourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->sourceArn) {
            $res['sourceArn'] = $this->sourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['sourceArn'])) {
            $model->sourceArn = $map['sourceArn'];
        }

        return $model;
    }
}
