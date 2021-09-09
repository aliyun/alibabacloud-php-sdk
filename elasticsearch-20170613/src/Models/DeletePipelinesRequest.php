<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DeletePipelinesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $pipelineIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'pipelineIds' => 'pipelineIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->pipelineIds) {
            $res['pipelineIds'] = $this->pipelineIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePipelinesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['pipelineIds'])) {
            $model->pipelineIds = $map['pipelineIds'];
        }

        return $model;
    }
}
