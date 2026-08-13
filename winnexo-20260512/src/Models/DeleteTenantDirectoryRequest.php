<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class DeleteTenantDirectoryRequest extends Model
{
    /**
     * @var string
     */
    public $deleteMode;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'deleteMode' => 'deleteMode',
        'directoryId' => 'directoryId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteMode) {
            $res['deleteMode'] = $this->deleteMode;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
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
        if (isset($map['deleteMode'])) {
            $model->deleteMode = $map['deleteMode'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
