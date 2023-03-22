<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class PredictTemplateModelRequest extends Model
{
    /**
     * @var bool
     */
    public $binaryToText;

    /**
     * @example https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230207/oss-Y96lOVVWdjui6QVGsHJk0JfNf1luQkGT.png?Expires=1675750767&OSSAccessKeyId=xxx&Signature=lzq1ZUi6j4vkXnDDMhDD4DQty5Q%3D
     *
     * @var string
     */
    public $content;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'binaryToText' => 'BinaryToText',
        'content'      => 'Content',
        'taskId'       => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->binaryToText) {
            $res['BinaryToText'] = $this->binaryToText;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictTemplateModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BinaryToText'])) {
            $model->binaryToText = $map['BinaryToText'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
