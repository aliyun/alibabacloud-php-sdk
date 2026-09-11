<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\ListGraphDraftResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $baseContentHash;

    /**
     * @var string
     */
    public $baseSchemaVersion;

    /**
     * @var int
     */
    public $draftChangeId;

    /**
     * @var string
     */
    public $draftContentHash;

    /**
     * @var string
     */
    public $editMode;

    /**
     * @var string
     */
    public $effectiveOperation;

    /**
     * @var string
     */
    public $elementType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasOnlineChanged;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $risk;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'baseContentHash' => 'baseContentHash',
        'baseSchemaVersion' => 'baseSchemaVersion',
        'draftChangeId' => 'draftChangeId',
        'draftContentHash' => 'draftContentHash',
        'editMode' => 'editMode',
        'effectiveOperation' => 'effectiveOperation',
        'elementType' => 'elementType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'hasOnlineChanged' => 'hasOnlineChanged',
        'operationType' => 'operationType',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
        'risk' => 'risk',
        'sourceType' => 'sourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseContentHash) {
            $res['baseContentHash'] = $this->baseContentHash;
        }

        if (null !== $this->baseSchemaVersion) {
            $res['baseSchemaVersion'] = $this->baseSchemaVersion;
        }

        if (null !== $this->draftChangeId) {
            $res['draftChangeId'] = $this->draftChangeId;
        }

        if (null !== $this->draftContentHash) {
            $res['draftContentHash'] = $this->draftContentHash;
        }

        if (null !== $this->editMode) {
            $res['editMode'] = $this->editMode;
        }

        if (null !== $this->effectiveOperation) {
            $res['effectiveOperation'] = $this->effectiveOperation;
        }

        if (null !== $this->elementType) {
            $res['elementType'] = $this->elementType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hasOnlineChanged) {
            $res['hasOnlineChanged'] = $this->hasOnlineChanged;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->resourceName) {
            $res['resourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->risk) {
            $res['risk'] = $this->risk;
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
        if (isset($map['baseContentHash'])) {
            $model->baseContentHash = $map['baseContentHash'];
        }

        if (isset($map['baseSchemaVersion'])) {
            $model->baseSchemaVersion = $map['baseSchemaVersion'];
        }

        if (isset($map['draftChangeId'])) {
            $model->draftChangeId = $map['draftChangeId'];
        }

        if (isset($map['draftContentHash'])) {
            $model->draftContentHash = $map['draftContentHash'];
        }

        if (isset($map['editMode'])) {
            $model->editMode = $map['editMode'];
        }

        if (isset($map['effectiveOperation'])) {
            $model->effectiveOperation = $map['effectiveOperation'];
        }

        if (isset($map['elementType'])) {
            $model->elementType = $map['elementType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['hasOnlineChanged'])) {
            $model->hasOnlineChanged = $map['hasOnlineChanged'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['resourceName'])) {
            $model->resourceName = $map['resourceName'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['risk'])) {
            $model->risk = $map['risk'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
