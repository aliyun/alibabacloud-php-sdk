<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunStyleFeatureAnalysisRequest extends Model
{
    /**
     * @var string[]
     */
    public $contents;

    /**
     * @var int[]
     */
    public $materialIds;

    /**
     * @description This parameter is required.
     *
     * @example llm-2setzb9x4ewsd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'contents' => 'Contents',
        'materialIds' => 'MaterialIds',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }
        if (null !== $this->materialIds) {
            $res['MaterialIds'] = $this->materialIds;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunStyleFeatureAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }
        if (isset($map['MaterialIds'])) {
            if (!empty($map['MaterialIds'])) {
                $model->materialIds = $map['MaterialIds'];
            }
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
