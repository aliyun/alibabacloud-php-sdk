<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EasyGene\V20210315\Models;

use AlibabaCloud\Tea\Model;

class DeleteEntityItemsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $entityNames;

    /**
     * @description This parameter is required.
     *
     * @example sample
     *
     * @var string
     */
    public $entityType;

    /**
     * @description This parameter is required.
     *
     * @example test-workspace
     *
     * @var string
     */
    public $workspace;
    protected $_name = [
        'entityNames' => 'EntityNames',
        'entityType'  => 'EntityType',
        'workspace'   => 'Workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityNames) {
            $res['EntityNames'] = $this->entityNames;
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
     * @return DeleteEntityItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityNames'])) {
            if (!empty($map['EntityNames'])) {
                $model->entityNames = $map['EntityNames'];
            }
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
