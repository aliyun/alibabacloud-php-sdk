<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateTenantDirectoryResponseBody extends Model
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
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

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
    public $operatingObjectName;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'message' => 'message',
        'name' => 'name',
        'operatingObjectName' => 'operatingObjectName',
        'parentId' => 'parentId',
        'path' => 'path',
        'requestId' => 'requestId',
        'tenantId' => 'tenantId',
        'userId' => 'userId',
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
