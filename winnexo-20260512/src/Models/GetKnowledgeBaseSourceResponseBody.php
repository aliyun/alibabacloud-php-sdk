<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetKnowledgeBaseSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryPath;

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
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceKind;

    /**
     * @var string
     */
    public $sourceTags;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusMessage;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'directoryPath' => 'directoryPath',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'message' => 'message',
        'name' => 'name',
        'requestId' => 'requestId',
        'sourceId' => 'sourceId',
        'sourceKind' => 'sourceKind',
        'sourceTags' => 'sourceTags',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'statusMessage' => 'statusMessage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->directoryPath) {
            $res['directoryPath'] = $this->directoryPath;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceKind) {
            $res['sourceKind'] = $this->sourceKind;
        }

        if (null !== $this->sourceTags) {
            $res['sourceTags'] = $this->sourceTags;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->statusMessage) {
            $res['statusMessage'] = $this->statusMessage;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['directoryPath'])) {
            $model->directoryPath = $map['directoryPath'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['sourceKind'])) {
            $model->sourceKind = $map['sourceKind'];
        }

        if (isset($map['sourceTags'])) {
            $model->sourceTags = $map['sourceTags'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['statusMessage'])) {
            $model->statusMessage = $map['statusMessage'];
        }

        return $model;
    }
}
