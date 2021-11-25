<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTensorboardRequest extends Model
{
    /**
     * @description JodId
     *
     * @var string
     */
    public $jodId;

    /**
     * @description 工作空间ID
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'jodId'       => 'JodId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jodId) {
            $res['JodId'] = $this->jodId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTensorboardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JodId'])) {
            $model->jodId = $map['JodId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
