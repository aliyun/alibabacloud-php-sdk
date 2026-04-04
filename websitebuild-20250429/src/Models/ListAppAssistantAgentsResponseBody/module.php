<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsResponseBody\module\credential;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppAssistantAgentsResponseBody\module\embedConfig;

class module extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var credential
     */
    public $credential;

    /**
     * @var embedConfig
     */
    public $embedConfig;

    /**
     * @var string[]
     */
    public $extraParams;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $platformAppId;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'bizId' => 'BizId',
        'credential' => 'Credential',
        'embedConfig' => 'EmbedConfig',
        'extraParams' => 'ExtraParams',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'platformAppId' => 'PlatformAppId',
        'platformType' => 'PlatformType',
        'status' => 'Status',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        if (null !== $this->embedConfig) {
            $this->embedConfig->validate();
        }
        if (\is_array($this->extraParams)) {
            Model::validateArray($this->extraParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->credential) {
            $res['Credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
        }

        if (null !== $this->embedConfig) {
            $res['EmbedConfig'] = null !== $this->embedConfig ? $this->embedConfig->toArray($noStream) : $this->embedConfig;
        }

        if (null !== $this->extraParams) {
            if (\is_array($this->extraParams)) {
                $res['ExtraParams'] = [];
                foreach ($this->extraParams as $key1 => $value1) {
                    $res['ExtraParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->platformAppId) {
            $res['PlatformAppId'] = $this->platformAppId;
        }

        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['Credential'])) {
            $model->credential = credential::fromMap($map['Credential']);
        }

        if (isset($map['EmbedConfig'])) {
            $model->embedConfig = embedConfig::fromMap($map['EmbedConfig']);
        }

        if (isset($map['ExtraParams'])) {
            if (!empty($map['ExtraParams'])) {
                $model->extraParams = [];
                foreach ($map['ExtraParams'] as $key1 => $value1) {
                    $model->extraParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['PlatformAppId'])) {
            $model->platformAppId = $map['PlatformAppId'];
        }

        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
