<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateKnowledgeBaseDirectoryRequest extends Model
{
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
    public $parentDirectoryId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'description' => 'description',
        'directoryId' => 'directoryId',
        'name' => 'name',
        'parentDirectoryId' => 'parentDirectoryId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentDirectoryId) {
            $res['parentDirectoryId'] = $this->parentDirectoryId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parentDirectoryId'])) {
            $model->parentDirectoryId = $map['parentDirectoryId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
