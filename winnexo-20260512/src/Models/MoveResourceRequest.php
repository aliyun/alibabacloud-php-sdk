<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class MoveResourceRequest extends Model
{
    /**
     * @var string
     */
    public $sourceDirectoryId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $targetDirectoryId;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'sourceDirectoryId' => 'sourceDirectoryId',
        'sourceId' => 'sourceId',
        'targetDirectoryId' => 'targetDirectoryId',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceDirectoryId) {
            $res['sourceDirectoryId'] = $this->sourceDirectoryId;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->targetDirectoryId) {
            $res['targetDirectoryId'] = $this->targetDirectoryId;
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
        if (isset($map['sourceDirectoryId'])) {
            $model->sourceDirectoryId = $map['sourceDirectoryId'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['targetDirectoryId'])) {
            $model->targetDirectoryId = $map['targetDirectoryId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
