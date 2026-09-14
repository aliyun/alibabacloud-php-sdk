<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListCrossProjectPipelineRunItemsResponseBody\data;

use AlibabaCloud\Dara\Model;

class pipelineRunItems extends Model
{
    /**
     * @var string
     */
    public $changeType;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $isRoot;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $objectName;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $objectVersion;

    /**
     * @var string
     */
    public $parentObjectId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'changeType' => 'ChangeType',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'isRoot' => 'IsRoot',
        'objectId' => 'ObjectId',
        'objectName' => 'ObjectName',
        'objectType' => 'ObjectType',
        'objectVersion' => 'ObjectVersion',
        'parentObjectId' => 'ParentObjectId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->isRoot) {
            $res['IsRoot'] = $this->isRoot;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->objectName) {
            $res['ObjectName'] = $this->objectName;
        }

        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }

        if (null !== $this->objectVersion) {
            $res['ObjectVersion'] = $this->objectVersion;
        }

        if (null !== $this->parentObjectId) {
            $res['ParentObjectId'] = $this->parentObjectId;
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
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['IsRoot'])) {
            $model->isRoot = $map['IsRoot'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['ObjectName'])) {
            $model->objectName = $map['ObjectName'];
        }

        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }

        if (isset($map['ObjectVersion'])) {
            $model->objectVersion = $map['ObjectVersion'];
        }

        if (isset($map['ParentObjectId'])) {
            $model->parentObjectId = $map['ParentObjectId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
