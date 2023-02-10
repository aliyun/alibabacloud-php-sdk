<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DocumentAutoml\V20221229\Models;

use AlibabaCloud\Tea\Model;

class PredictTemplateModelRequest extends Model
{
    /**
     * @example https://doc-automl-public.oss-cn-hangzhou.aliyuncs.com/3/xxx/stage/upload/20230207/oss-Y96lOVVWdjui6QVGsHJk0JfNf1luQkGT.png?Expires=1675750767&OSSAccessKeyId=xxx&Signature=lzq1ZUi6j4vkXnDDMhDD4DQty5Q%3D
     *
     * @var string
     */
    public $content;

    /**
     * @example 319
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'content'   => 'Content',
        'projectId' => 'ProjectId',
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
