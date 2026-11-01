<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetAccessApplicationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $metadataUrl;

    /**
     * @var string[]
     */
    public $redirectUris;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userSource;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'applicationId' => 'applicationId',
        'applicationName' => 'applicationName',
        'clientId' => 'clientId',
        'createdAt' => 'createdAt',
        'metadataUrl' => 'metadataUrl',
        'redirectUris' => 'redirectUris',
        'updatedAt' => 'updatedAt',
        'userSource' => 'userSource',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->redirectUris)) {
            Model::validateArray($this->redirectUris);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['applicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['applicationName'] = $this->applicationName;
        }

        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->metadataUrl) {
            $res['metadataUrl'] = $this->metadataUrl;
        }

        if (null !== $this->redirectUris) {
            if (\is_array($this->redirectUris)) {
                $res['redirectUris'] = [];
                $n1 = 0;
                foreach ($this->redirectUris as $item1) {
                    $res['redirectUris'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userSource) {
            $res['userSource'] = $this->userSource;
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
        if (isset($map['applicationId'])) {
            $model->applicationId = $map['applicationId'];
        }

        if (isset($map['applicationName'])) {
            $model->applicationName = $map['applicationName'];
        }

        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['metadataUrl'])) {
            $model->metadataUrl = $map['metadataUrl'];
        }

        if (isset($map['redirectUris'])) {
            if (!empty($map['redirectUris'])) {
                $model->redirectUris = [];
                $n1 = 0;
                foreach ($map['redirectUris'] as $item1) {
                    $model->redirectUris[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userSource'])) {
            $model->userSource = $map['userSource'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
