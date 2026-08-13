<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBaseContentsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListUserVisibleKnowledgeBaseContentsResponseBody\items\shareInfos;

class items extends Model
{
    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryKind;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var bool
     */
    public $kbSubmissionPending;

    /**
     * @var string
     */
    public $modifierName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed[][]
     */
    public $objectBindings;

    /**
     * @var string
     */
    public $ooVisibilityMode;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var shareInfos[]
     */
    public $shareInfos;

    /**
     * @var bool
     */
    public $shared;

    /**
     * @var int
     */
    public $sourceFailedCount;

    /**
     * @var string
     */
    public $sourceKind;

    /**
     * @var int
     */
    public $sourceReadyCount;

    /**
     * @var string
     */
    public $sourceStatus;

    /**
     * @var int
     */
    public $sourceTotalCount;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'creatorName' => 'creatorName',
        'description' => 'description',
        'directoryKind' => 'directoryKind',
        'directoryType' => 'directoryType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'itemId' => 'itemId',
        'itemType' => 'itemType',
        'kbSubmissionPending' => 'kbSubmissionPending',
        'modifierName' => 'modifierName',
        'name' => 'name',
        'objectBindings' => 'objectBindings',
        'ooVisibilityMode' => 'ooVisibilityMode',
        'readOnly' => 'readOnly',
        'shareInfos' => 'shareInfos',
        'shared' => 'shared',
        'sourceFailedCount' => 'sourceFailedCount',
        'sourceKind' => 'sourceKind',
        'sourceReadyCount' => 'sourceReadyCount',
        'sourceStatus' => 'sourceStatus',
        'sourceTotalCount' => 'sourceTotalCount',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        if (\is_array($this->objectBindings)) {
            Model::validateArray($this->objectBindings);
        }
        if (\is_array($this->shareInfos)) {
            Model::validateArray($this->shareInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryKind) {
            $res['directoryKind'] = $this->directoryKind;
        }

        if (null !== $this->directoryType) {
            $res['directoryType'] = $this->directoryType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }

        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->kbSubmissionPending) {
            $res['kbSubmissionPending'] = $this->kbSubmissionPending;
        }

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectBindings) {
            if (\is_array($this->objectBindings)) {
                $res['objectBindings'] = [];
                $n1 = 0;
                foreach ($this->objectBindings as $item1) {
                    if (\is_array($item1)) {
                        $res['objectBindings'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['objectBindings'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->ooVisibilityMode) {
            $res['ooVisibilityMode'] = $this->ooVisibilityMode;
        }

        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        if (null !== $this->shareInfos) {
            if (\is_array($this->shareInfos)) {
                $res['shareInfos'] = [];
                $n1 = 0;
                foreach ($this->shareInfos as $item1) {
                    $res['shareInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->shared) {
            $res['shared'] = $this->shared;
        }

        if (null !== $this->sourceFailedCount) {
            $res['sourceFailedCount'] = $this->sourceFailedCount;
        }

        if (null !== $this->sourceKind) {
            $res['sourceKind'] = $this->sourceKind;
        }

        if (null !== $this->sourceReadyCount) {
            $res['sourceReadyCount'] = $this->sourceReadyCount;
        }

        if (null !== $this->sourceStatus) {
            $res['sourceStatus'] = $this->sourceStatus;
        }

        if (null !== $this->sourceTotalCount) {
            $res['sourceTotalCount'] = $this->sourceTotalCount;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryKind'])) {
            $model->directoryKind = $map['directoryKind'];
        }

        if (isset($map['directoryType'])) {
            $model->directoryType = $map['directoryType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }

        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['kbSubmissionPending'])) {
            $model->kbSubmissionPending = $map['kbSubmissionPending'];
        }

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['objectBindings'])) {
            if (!empty($map['objectBindings'])) {
                $model->objectBindings = [];
                $n1 = 0;
                foreach ($map['objectBindings'] as $item1) {
                    if (!empty($item1)) {
                        $model->objectBindings[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->objectBindings[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ooVisibilityMode'])) {
            $model->ooVisibilityMode = $map['ooVisibilityMode'];
        }

        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        if (isset($map['shareInfos'])) {
            if (!empty($map['shareInfos'])) {
                $model->shareInfos = [];
                $n1 = 0;
                foreach ($map['shareInfos'] as $item1) {
                    $model->shareInfos[$n1] = shareInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['shared'])) {
            $model->shared = $map['shared'];
        }

        if (isset($map['sourceFailedCount'])) {
            $model->sourceFailedCount = $map['sourceFailedCount'];
        }

        if (isset($map['sourceKind'])) {
            $model->sourceKind = $map['sourceKind'];
        }

        if (isset($map['sourceReadyCount'])) {
            $model->sourceReadyCount = $map['sourceReadyCount'];
        }

        if (isset($map['sourceStatus'])) {
            $model->sourceStatus = $map['sourceStatus'];
        }

        if (isset($map['sourceTotalCount'])) {
            $model->sourceTotalCount = $map['sourceTotalCount'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
