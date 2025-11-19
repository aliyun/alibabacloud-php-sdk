<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class Credential extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $credentialAuthType;

    /**
     * @var string
     */
    public $credentialId;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string[]
     */
    public $credentialPublicConfig;

    /**
     * @var string
     */
    public $credentialSecret;

    /**
     * @var string
     */
    public $credentialSourceType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var RelatedResource[]
     */
    public $relatedResources;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'credentialAuthType' => 'credentialAuthType',
        'credentialId' => 'credentialId',
        'credentialName' => 'credentialName',
        'credentialPublicConfig' => 'credentialPublicConfig',
        'credentialSecret' => 'credentialSecret',
        'credentialSourceType' => 'credentialSourceType',
        'description' => 'description',
        'enabled' => 'enabled',
        'relatedResources' => 'relatedResources',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
        if (\is_array($this->credentialPublicConfig)) {
            Model::validateArray($this->credentialPublicConfig);
        }
        if (\is_array($this->relatedResources)) {
            Model::validateArray($this->relatedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->credentialAuthType) {
            $res['credentialAuthType'] = $this->credentialAuthType;
        }

        if (null !== $this->credentialId) {
            $res['credentialId'] = $this->credentialId;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->credentialPublicConfig) {
            if (\is_array($this->credentialPublicConfig)) {
                $res['credentialPublicConfig'] = [];
                foreach ($this->credentialPublicConfig as $key1 => $value1) {
                    $res['credentialPublicConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->credentialSecret) {
            $res['credentialSecret'] = $this->credentialSecret;
        }

        if (null !== $this->credentialSourceType) {
            $res['credentialSourceType'] = $this->credentialSourceType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->relatedResources) {
            if (\is_array($this->relatedResources)) {
                $res['relatedResources'] = [];
                $n1 = 0;
                foreach ($this->relatedResources as $item1) {
                    $res['relatedResources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['credentialAuthType'])) {
            $model->credentialAuthType = $map['credentialAuthType'];
        }

        if (isset($map['credentialId'])) {
            $model->credentialId = $map['credentialId'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['credentialPublicConfig'])) {
            if (!empty($map['credentialPublicConfig'])) {
                $model->credentialPublicConfig = [];
                foreach ($map['credentialPublicConfig'] as $key1 => $value1) {
                    $model->credentialPublicConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['credentialSecret'])) {
            $model->credentialSecret = $map['credentialSecret'];
        }

        if (isset($map['credentialSourceType'])) {
            $model->credentialSourceType = $map['credentialSourceType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['relatedResources'])) {
            if (!empty($map['relatedResources'])) {
                $model->relatedResources = [];
                $n1 = 0;
                foreach ($map['relatedResources'] as $item1) {
                    $model->relatedResources[$n1] = RelatedResource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
