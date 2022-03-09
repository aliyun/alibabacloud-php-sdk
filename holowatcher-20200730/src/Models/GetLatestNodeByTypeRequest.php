<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class GetLatestNodeByTypeRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $pipelineNodeType;
    protected $_name = [
        'aliyunJwt'        => 'AliyunJwt',
        'pipelineNodeType' => 'PipelineNodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->pipelineNodeType) {
            $res['PipelineNodeType'] = $this->pipelineNodeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLatestNodeByTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['PipelineNodeType'])) {
            $model->pipelineNodeType = $map['PipelineNodeType'];
        }

        return $model;
    }
}
