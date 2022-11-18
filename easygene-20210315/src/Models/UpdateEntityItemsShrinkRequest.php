<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class UpdateEntityItemsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $entityItemsShrink;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityItemsShrink' => 'EntityItems',
        'entityType'        => 'EntityType',
        'workspace'         => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityItemsShrink) {
            $res['EntityItems'] = $this->entityItemsShrink;
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
     * @return UpdateEntityItemsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityItems'])) {
            $model->entityItemsShrink = $map['EntityItems'];
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
