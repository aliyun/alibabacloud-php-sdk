<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetAgenticAgentByInstallTokenResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $activeApiKeyPrefixes;

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
    public $agentType;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $creationType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'activeApiKeyPrefixes' => 'ActiveApiKeyPrefixes',
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'agentType' => 'AgentType',
        'createdAt' => 'CreatedAt',
        'creationType' => 'CreationType',
        'description' => 'Description',
        'ownerId' => 'OwnerId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->activeApiKeyPrefixes)) {
            Model::validateArray($this->activeApiKeyPrefixes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeApiKeyPrefixes) {
            if (\is_array($this->activeApiKeyPrefixes)) {
                $res['ActiveApiKeyPrefixes'] = [];
                $n1 = 0;
                foreach ($this->activeApiKeyPrefixes as $item1) {
                    $res['ActiveApiKeyPrefixes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->agentType) {
            $res['AgentType'] = $this->agentType;
        }

        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }

        if (null !== $this->creationType) {
            $res['CreationType'] = $this->creationType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ActiveApiKeyPrefixes'])) {
            if (!empty($map['ActiveApiKeyPrefixes'])) {
                $model->activeApiKeyPrefixes = [];
                $n1 = 0;
                foreach ($map['ActiveApiKeyPrefixes'] as $item1) {
                    $model->activeApiKeyPrefixes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['AgentType'])) {
            $model->agentType = $map['AgentType'];
        }

        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }

        if (isset($map['CreationType'])) {
            $model->creationType = $map['CreationType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
