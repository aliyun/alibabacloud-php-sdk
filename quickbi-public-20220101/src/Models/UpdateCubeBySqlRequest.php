<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class UpdateCubeBySqlRequest extends Model
{
    /**
     * @var string
     */
    public $cubeId;

    /**
     * @var string
     */
    public $customSql;

    /**
     * @var string
     */
    public $dsId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cubeId' => 'CubeId',
        'customSql' => 'CustomSql',
        'dsId' => 'DsId',
        'userId' => 'UserId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cubeId) {
            $res['CubeId'] = $this->cubeId;
        }

        if (null !== $this->customSql) {
            $res['CustomSql'] = $this->customSql;
        }

        if (null !== $this->dsId) {
            $res['DsId'] = $this->dsId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CubeId'])) {
            $model->cubeId = $map['CubeId'];
        }

        if (isset($map['CustomSql'])) {
            $model->customSql = $map['CustomSql'];
        }

        if (isset($map['DsId'])) {
            $model->dsId = $map['DsId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
