<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListSkillsResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executeMode;

    /**
     * @var bool
     */
    public $globalAccess;

    /**
     * @var bool
     */
    public $hasDraftChanges;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $skillCode;

    /**
     * @var int
     */
    public $skillHubDefinitionId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $versionNumber;
    protected $_name = [
        'createdTime' => 'createdTime',
        'description' => 'description',
        'executeMode' => 'executeMode',
        'globalAccess' => 'globalAccess',
        'hasDraftChanges' => 'hasDraftChanges',
        'name' => 'name',
        'skillCode' => 'skillCode',
        'skillHubDefinitionId' => 'skillHubDefinitionId',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'tags' => 'tags',
        'updatedTime' => 'updatedTime',
        'versionNumber' => 'versionNumber',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->executeMode) {
            $res['executeMode'] = $this->executeMode;
        }

        if (null !== $this->globalAccess) {
            $res['globalAccess'] = $this->globalAccess;
        }

        if (null !== $this->hasDraftChanges) {
            $res['hasDraftChanges'] = $this->hasDraftChanges;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->skillCode) {
            $res['skillCode'] = $this->skillCode;
        }

        if (null !== $this->skillHubDefinitionId) {
            $res['skillHubDefinitionId'] = $this->skillHubDefinitionId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updatedTime) {
            $res['updatedTime'] = $this->updatedTime;
        }

        if (null !== $this->versionNumber) {
            $res['versionNumber'] = $this->versionNumber;
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
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['executeMode'])) {
            $model->executeMode = $map['executeMode'];
        }

        if (isset($map['globalAccess'])) {
            $model->globalAccess = $map['globalAccess'];
        }

        if (isset($map['hasDraftChanges'])) {
            $model->hasDraftChanges = $map['hasDraftChanges'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['skillCode'])) {
            $model->skillCode = $map['skillCode'];
        }

        if (isset($map['skillHubDefinitionId'])) {
            $model->skillHubDefinitionId = $map['skillHubDefinitionId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['updatedTime'])) {
            $model->updatedTime = $map['updatedTime'];
        }

        if (isset($map['versionNumber'])) {
            $model->versionNumber = $map['versionNumber'];
        }

        return $model;
    }
}
