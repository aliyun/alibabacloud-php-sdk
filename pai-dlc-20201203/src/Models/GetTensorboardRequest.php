<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class GetTensorboardRequest extends Model
{
    /**
     * @example dlc-xxxxxxxx
     *
     * @var string
     */
    public $jodId;

    /**
     * @var string
     */
    public $token;

    /**
     * @example 46099
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'jodId'       => 'JodId',
        'token'       => 'Token',
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
        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
