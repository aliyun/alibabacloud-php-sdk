<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAgentCodePackageOssRamAuthorizeUrlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $authorizeUrl;

    /**
     * @var string
     */
    public $ossBucketName;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'authorizeUrl' => 'authorizeUrl',
        'ossBucketName' => 'ossBucketName',
        'roleName' => 'roleName',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorizeUrl) {
            $res['authorizeUrl'] = $this->authorizeUrl;
        }

        if (null !== $this->ossBucketName) {
            $res['ossBucketName'] = $this->ossBucketName;
        }

        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
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
        if (isset($map['authorizeUrl'])) {
            $model->authorizeUrl = $map['authorizeUrl'];
        }

        if (isset($map['ossBucketName'])) {
            $model->ossBucketName = $map['ossBucketName'];
        }

        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
