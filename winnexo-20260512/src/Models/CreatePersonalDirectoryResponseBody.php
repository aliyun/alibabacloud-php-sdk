<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalDirectoryResponseBody extends Model
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
     * @var string
     */
    public $parentDirectoryId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'directoryKind' => 'directoryKind',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'message' => 'message',
        'name' => 'name',
        'operatingObjectName' => 'operatingObjectName',
        'parentDirectoryId' => 'parentDirectoryId',
        'path' => 'path',
        'requestId' => 'requestId',
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

        if (null !== $this->directoryKind) {
            $res['directoryKind'] = $this->directoryKind;
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

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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

        if (isset($map['directoryKind'])) {
            $model->directoryKind = $map['directoryKind'];
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

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
