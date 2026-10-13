<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListSkillReferencesResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageItems extends Model
{
    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $ownerVersion;

    /**
     * @var string
     */
    public $selectorType;

    /**
     * @var string
     */
    public $selectorValue;

    /**
     * @var string
     */
    public $skillName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'ownerId' => 'ownerId',
        'ownerType' => 'ownerType',
        'ownerVersion' => 'ownerVersion',
        'selectorType' => 'selectorType',
        'selectorValue' => 'selectorValue',
        'skillName' => 'skillName',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['ownerId'] = $this->ownerId;
        }

        if (null !== $this->ownerType) {
            $res['ownerType'] = $this->ownerType;
        }

        if (null !== $this->ownerVersion) {
            $res['ownerVersion'] = $this->ownerVersion;
        }

        if (null !== $this->selectorType) {
            $res['selectorType'] = $this->selectorType;
        }

        if (null !== $this->selectorValue) {
            $res['selectorValue'] = $this->selectorValue;
        }

        if (null !== $this->skillName) {
            $res['skillName'] = $this->skillName;
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
        if (isset($map['ownerId'])) {
            $model->ownerId = $map['ownerId'];
        }

        if (isset($map['ownerType'])) {
            $model->ownerType = $map['ownerType'];
        }

        if (isset($map['ownerVersion'])) {
            $model->ownerVersion = $map['ownerVersion'];
        }

        if (isset($map['selectorType'])) {
            $model->selectorType = $map['selectorType'];
        }

        if (isset($map['selectorValue'])) {
            $model->selectorValue = $map['selectorValue'];
        }

        if (isset($map['skillName'])) {
            $model->skillName = $map['skillName'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
