<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateExternalAgentResponseBody\data;

use AlibabaCloud\Dara\Model;

class effectiveResult extends Model
{
    /**
     * @var string
     */
    public $matrixUserId;

    /**
     * @var string
     */
    public $personalRoomId;

    /**
     * @var string
     */
    public $runtimeAcceptStatus;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var int
     */
    public $runtimeRequestVersion;

    /**
     * @var string
     */
    public $workspacePrefix;
    protected $_name = [
        'matrixUserId' => 'matrixUserId',
        'personalRoomId' => 'personalRoomId',
        'runtimeAcceptStatus' => 'runtimeAcceptStatus',
        'runtimeId' => 'runtimeId',
        'runtimeRequestVersion' => 'runtimeRequestVersion',
        'workspacePrefix' => 'workspacePrefix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matrixUserId) {
            $res['matrixUserId'] = $this->matrixUserId;
        }

        if (null !== $this->personalRoomId) {
            $res['personalRoomId'] = $this->personalRoomId;
        }

        if (null !== $this->runtimeAcceptStatus) {
            $res['runtimeAcceptStatus'] = $this->runtimeAcceptStatus;
        }

        if (null !== $this->runtimeId) {
            $res['runtimeId'] = $this->runtimeId;
        }

        if (null !== $this->runtimeRequestVersion) {
            $res['runtimeRequestVersion'] = $this->runtimeRequestVersion;
        }

        if (null !== $this->workspacePrefix) {
            $res['workspacePrefix'] = $this->workspacePrefix;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['matrixUserId'])) {
            $model->matrixUserId = $map['matrixUserId'];
        }

        if (isset($map['personalRoomId'])) {
            $model->personalRoomId = $map['personalRoomId'];
        }

        if (isset($map['runtimeAcceptStatus'])) {
            $model->runtimeAcceptStatus = $map['runtimeAcceptStatus'];
        }

        if (isset($map['runtimeId'])) {
            $model->runtimeId = $map['runtimeId'];
        }

        if (isset($map['runtimeRequestVersion'])) {
            $model->runtimeRequestVersion = $map['runtimeRequestVersion'];
        }

        if (isset($map['workspacePrefix'])) {
            $model->workspacePrefix = $map['workspacePrefix'];
        }

        return $model;
    }
}
