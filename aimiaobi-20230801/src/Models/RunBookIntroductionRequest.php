<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class RunBookIntroductionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 3YQRatoe8phnpIsIE6z7DTPknhG8Fj
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example 0f56f98a-f2d8-47ec-98e9-1cbdcffa9539
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example llm-vtmox6g2bhq2qv5c
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'docId'       => 'DocId',
        'sessionId'   => 'SessionId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunBookIntroductionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
