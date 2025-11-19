<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CredentialListItem extends Model
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
     * @var string
     */
    public $credentialSourceType;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $relatedResourceCount;

    /**
     * @var string
     */
    public $updatedAt;
    protected $_name = [
        'createdAt' => 'createdAt',
        'credentialAuthType' => 'credentialAuthType',
        'credentialId' => 'credentialId',
        'credentialName' => 'credentialName',
        'credentialSourceType' => 'credentialSourceType',
        'enabled' => 'enabled',
        'relatedResourceCount' => 'relatedResourceCount',
        'updatedAt' => 'updatedAt',
    ];

    public function validate()
    {
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

        if (null !== $this->credentialSourceType) {
            $res['credentialSourceType'] = $this->credentialSourceType;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->relatedResourceCount) {
            $res['relatedResourceCount'] = $this->relatedResourceCount;
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

        if (isset($map['credentialSourceType'])) {
            $model->credentialSourceType = $map['credentialSourceType'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['relatedResourceCount'])) {
            $model->relatedResourceCount = $map['relatedResourceCount'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        return $model;
    }
}
