<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SaveGraphDraftBatchDefineResponseBody;

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
    public $elementType;

    /**
     * @var string
     */
    public $gmtModified;

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
    public $sourceType;
    protected $_name = [
        'baseContentHash' => 'baseContentHash',
        'baseSchemaVersion' => 'baseSchemaVersion',
        'draftChangeId' => 'draftChangeId',
        'draftContentHash' => 'draftContentHash',
        'elementType' => 'elementType',
        'gmtModified' => 'gmtModified',
        'operationType' => 'operationType',
        'resourceName' => 'resourceName',
        'resourceType' => 'resourceType',
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

        if (null !== $this->elementType) {
            $res['elementType'] = $this->elementType;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
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

        if (isset($map['elementType'])) {
            $model->elementType = $map['elementType'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
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

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
