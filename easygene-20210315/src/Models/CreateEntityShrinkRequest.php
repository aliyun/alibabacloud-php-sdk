<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class CreateEntityShrinkRequest extends Model
{
    /**
     * @example T93cy1mMDE4OTgxNGU1ZTkK
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $entityItemsShrink;

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
        'clientToken'       => 'ClientToken',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
     * @return CreateEntityShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
