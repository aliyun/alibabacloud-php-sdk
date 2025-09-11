<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class CreateCubeBySqlRequest extends Model
{
    /**
     * @var string
     */
    public $caption;

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
        'caption' => 'Caption',
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
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
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
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
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
