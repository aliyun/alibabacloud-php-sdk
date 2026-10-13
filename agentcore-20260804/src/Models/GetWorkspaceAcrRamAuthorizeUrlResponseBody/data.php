<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceAcrRamAuthorizeUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $acrInstanceId;

    /**
     * @var string
     */
    public $authorizeUrl;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $roleSource;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acrInstanceId' => 'acrInstanceId',
        'authorizeUrl' => 'authorizeUrl',
        'roleName' => 'roleName',
        'roleSource' => 'roleSource',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acrInstanceId) {
            $res['acrInstanceId'] = $this->acrInstanceId;
        }

        if (null !== $this->authorizeUrl) {
            $res['authorizeUrl'] = $this->authorizeUrl;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }

        if (null !== $this->roleSource) {
            $res['roleSource'] = $this->roleSource;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['acrInstanceId'])) {
            $model->acrInstanceId = $map['acrInstanceId'];
        }

        if (isset($map['authorizeUrl'])) {
            $model->authorizeUrl = $map['authorizeUrl'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['roleSource'])) {
            $model->roleSource = $map['roleSource'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
