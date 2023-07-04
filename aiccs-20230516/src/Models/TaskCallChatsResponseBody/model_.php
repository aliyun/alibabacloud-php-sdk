<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\TaskCallChatsResponseBody;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @description 说话内容
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $content;

    /**
     * @description 说话时间
     *
     * @example 2022-01-13 14:56:46.604
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 说话号码
     *
     * @example 138*****265
     *
     * @var string
     */
    public $fromNumber;
    protected $_name = [
        'content'    => 'Content',
        'createTime' => 'CreateTime',
        'fromNumber' => 'FromNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->fromNumber) {
            $res['FromNumber'] = $this->fromNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FromNumber'])) {
            $model->fromNumber = $map['FromNumber'];
        }

        return $model;
    }
}
