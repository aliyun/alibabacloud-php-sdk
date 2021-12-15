<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class UpdatePipelineBaseInfoRequest extends Model
{
    /**
     * @var int
     */
    public $envId;

    /**
     * @var string
     */
    public $pipelineName;

    /**
     * @var string
     */
    public $tagList;
    protected $_name = [
        'envId'        => 'envId',
        'pipelineName' => 'pipelineName',
        'tagList'      => 'tagList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }
        if (null !== $this->pipelineName) {
            $res['pipelineName'] = $this->pipelineName;
        }
        if (null !== $this->tagList) {
            $res['tagList'] = $this->tagList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePipelineBaseInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }
        if (isset($map['pipelineName'])) {
            $model->pipelineName = $map['pipelineName'];
        }
        if (isset($map['tagList'])) {
            $model->tagList = $map['tagList'];
        }

        return $model;
    }
}
