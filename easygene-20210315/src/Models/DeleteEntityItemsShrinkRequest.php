<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class DeleteEntityItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $entityNamesShrink;

    /**
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityNamesShrink' => 'EntityNames',
        'entityType'        => 'EntityType',
        'workspace'         => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityNamesShrink) {
            $res['EntityNames'] = $this->entityNamesShrink;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->workspace) {
            $res['Workspace'] = $this->workspace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteEntityItemsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityNames'])) {
            $model->entityNamesShrink = $map['EntityNames'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Workspace'])) {
            $model->workspace = $map['Workspace'];
        }

        return $model;
    }
}
