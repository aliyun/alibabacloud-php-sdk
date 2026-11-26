<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateTenantDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $appToken;

    /**
     * @var bool
     */
    public $changeRecordEnabled;

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
    public $name;

    /**
     * @var string
     */
    public $ooVisibilityMode;

    /**
     * @var string[]
     */
    public $operatingObjectNames;

    /**
     * @var string
     */
    public $opsUserCode;

    /**
     * @var string
     */
    public $opsUserId;

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
    public $tenantId;
    protected $_name = [
        'appToken' => 'appToken',
        'changeRecordEnabled' => 'changeRecordEnabled',
        'description' => 'description',
        'directoryId' => 'directoryId',
        'name' => 'name',
        'ooVisibilityMode' => 'ooVisibilityMode',
        'operatingObjectNames' => 'operatingObjectNames',
        'opsUserCode' => 'opsUserCode',
        'opsUserId' => 'opsUserId',
        'parentId' => 'parentId',
        'path' => 'path',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->operatingObjectNames)) {
            Model::validateArray($this->operatingObjectNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appToken) {
            $res['appToken'] = $this->appToken;
        }

        if (null !== $this->changeRecordEnabled) {
            $res['changeRecordEnabled'] = $this->changeRecordEnabled;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ooVisibilityMode) {
            $res['ooVisibilityMode'] = $this->ooVisibilityMode;
        }

        if (null !== $this->operatingObjectNames) {
            if (\is_array($this->operatingObjectNames)) {
                $res['operatingObjectNames'] = [];
                $n1 = 0;
                foreach ($this->operatingObjectNames as $item1) {
                    $res['operatingObjectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->opsUserCode) {
            $res['opsUserCode'] = $this->opsUserCode;
        }

        if (null !== $this->opsUserId) {
            $res['opsUserId'] = $this->opsUserId;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['appToken'])) {
            $model->appToken = $map['appToken'];
        }

        if (isset($map['changeRecordEnabled'])) {
            $model->changeRecordEnabled = $map['changeRecordEnabled'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ooVisibilityMode'])) {
            $model->ooVisibilityMode = $map['ooVisibilityMode'];
        }

        if (isset($map['operatingObjectNames'])) {
            if (!empty($map['operatingObjectNames'])) {
                $model->operatingObjectNames = [];
                $n1 = 0;
                foreach ($map['operatingObjectNames'] as $item1) {
                    $model->operatingObjectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['opsUserCode'])) {
            $model->opsUserCode = $map['opsUserCode'];
        }

        if (isset($map['opsUserId'])) {
            $model->opsUserId = $map['opsUserId'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
