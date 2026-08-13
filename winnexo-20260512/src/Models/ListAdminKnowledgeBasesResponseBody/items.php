<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAdminKnowledgeBasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ListAdminKnowledgeBasesResponseBody\items\objectBindings;

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
     * @var string
     */
    public $name;

    /**
     * @var objectBindings[]
     */
    public $objectBindings;

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
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'itemId' => 'itemId',
        'itemType' => 'itemType',
        'name' => 'name',
        'objectBindings' => 'objectBindings',
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

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->objectBindings) {
            if (\is_array($this->objectBindings)) {
                $res['objectBindings'] = [];
                $n1 = 0;
                foreach ($this->objectBindings as $item1) {
                    $res['objectBindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['objectBindings'])) {
            if (!empty($map['objectBindings'])) {
                $model->objectBindings = [];
                $n1 = 0;
                foreach ($map['objectBindings'] as $item1) {
                    $model->objectBindings[$n1] = objectBindings::fromMap($item1);
                    ++$n1;
                }
            }
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
